<?php
namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\NotFoundHttpException;
use common\helpers\PermissionHelpers;

/**
 * Login form
 */
class LoginForm extends Model
{
	public $username;
	public $password;
	public $rememberMe = true;

	private $_user = false;


	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			// username and password are both required
			[['username', 'password'], 'required'],
			// rememberMe must be a boolean value
			['rememberMe', 'boolean'],
			// password is validated by validatePassword()
			['password', 'validatePassword'],
		];
	}

	public function attributeLabels()
	{
		return [
			'username' => 'Email or Username',
			//'password' => 'Password',
			//'rememberMe' => 'Remember Me', // 'Forget Me Not'
		];
	}

	/**
	 * Validates the password.
	 * This method serves as the inline validation for password.
	 *
	 * @param string $attribute the attribute currently being validated
	 * @param array $params the additional name-value pairs given in the rule
	 */
	public function validatePassword($attribute, $params)
	{
		if (!$this->hasErrors()) {
			$user = $this->getUser();
			if (!$user || !$user->validatePassword($this->password)) {
				$this->addError($attribute, 'Incorrect username or password.');
			}
		}
	}

	/**
	 * Logs in a user using the provided username and password.
	 *
	 * @return boolean whether the user is logged in successfully
	 */
	public function login()
	{
		if ($this->validate()) {
			return Yii::$app->user->login(
				$this->getUser(),
				$this->rememberMe ? 3600 * 24 * 30 : 0 // 30 days
			);
		} else {
			return false;
		}
	}

	public function loginAdmin()
	{
		if (
			$this->validate() &&
			PermissionHelpers::requireMinimumRole('Admin', $this->getUser()->id)
		) {
			return Yii::$app->user->login(
				$this->getUser(),
				$this->rememberMe ? 3600 * 24 * 30 : 0 // 30 days
			);
		} else {
			throw new NotFoundHttpException('You Shall Not Pass.');
		}
	}

	/**
	 * Finds user by [[username]] or [[email]]
	 *
	 * @return User|null
	 */
	public function getUser()
	{
		// addition for login by email
		if (!$this->_user) {
			$this->_user = User::findByEmail($this->username);
		} // end addition
		if (!$this->_user) {
			$this->_user = User::findByUsername($this->username);
		}

		return $this->_user;
	}
}

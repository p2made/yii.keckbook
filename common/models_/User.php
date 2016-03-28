<?php
class User extends \common\models\base\UserBase implements IdentityInterface
{

	/**
	 * get user id Link
	 */
	public function getUserIdLink()
	{
		$url = Url::to(['user/update', 'id'=>$this->id]);
		return Html::a($this->id, $url, []);
	}

	/**
	 * @getUserLink
	 */
	public function getUserLink()
	{
		$url = Url::to(['user/view', 'id'=>$this->id]);
		return Html::a($this->username, $url, []);
	}

	/**
	 * Finds user by email - addition for email based login
	 *
	 * @param string $email
	 * @return static|null
	 */
	public static function findByEmail($email)
	{
		return static::findOne([
			'email' => $email,
			'status_id' => self::STATUS_ACTIVE,
		]);
	}

}

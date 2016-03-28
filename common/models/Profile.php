<?php
/**
 * Profile.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

/**
 * This is the model class for table "p2m_profile"/"{{%profile}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property integer $gender_id
 * @property string $created_at
 * @property string $updated_at
 *
 * * @property Gender $gender
 * * @property User $user
 */

namespace common\models;

use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

use common\helpers\ValueHelpers;

class Profile extends \common\models\base\ProfileBase
{

	/**
	 * behaviors
	 */
	public function behaviors()
	{
		return [
			'timestamp' => [
				'class' => 'yii\behaviors\TimestampBehavior',
				'attributes' => [
					ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
					ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
				],
				'value' => new Expression('NOW()'),
			],
		];
	}

	/**
	 * rules
	 */
	public function rules()
	{
		// return array_merge (parent::rules(), [
		return array_merge ($parent->rules, [
			[['gender_id'],'in', 'range'=>array_keys($this->getGenderList())],
			[['birthdate'], 'date', 'format'=>'php:Y-m-d'],
			//[['birthdate'], 'date', 'format'=>'Y-m-d'],
			[['user_id'], 'unique'],
			[['first_name', 'last_name'], 'string', 'max' => 64],
		]);
	}

	/**
	 * attribute labels
	 */
	public function attributeLabels()
	{
		// return array_merge (parent::attributeLabels(), [
		return array_merge ($parent->attributeLabels, [
			'roleName' => Yii::t('app', 'Role'),
			'statusName' => Yii::t('app', 'Status'),
			'profileId' => Yii::t('app', 'Profile'),
			'profileLink' => Yii::t('app', 'Profile'),
			'userLink' => Yii::t('app', 'User'),
			'username' => Yii::t('app', 'User'),
			'userTypeName' => Yii::t('app', 'User Type'),
			'userTypeId' => Yii::t('app', 'User Type'),
			'userIdLink' => Yii::t('app', 'ID'),
		]);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getGender()
	{
		return $this->hasOne(Gender::className(), ['id' => 'gender_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getGenderName()
	{
		return $this->gender->gender_name;
	}

	/**
	 * get list of genders for dropdown
	 */
	public static function getGenderList()
	{
		$droptions = Gender::find()->asArray()->all();
		return ArrayHelper::map($droptions, 'id', 'gender_name');
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'user_id']);
	}

	/**
	 * @get Username
	 */
	public function getUsername()
	{
		return $this->user->username;
	}

	/**
	 * @getUserId
	 */
	public function getUserId()
	{
		return $this->user ? $this->user->id : 'none';
	}

	/**
	 * @getUserLink
	 */
	public function getUserLink()
	{
		$url = Url::to(['user/view', 'id'=>$this->UserId]);
		$options = [];
		return Html::a($this->getUserName(), $url, $options);
	}

	/**
	 * @getProfileLink
	 */
	public function getProfileIdLink()
	{
		$url = Url::to(['profile/update', 'id'=>$this->id]);
		$options = [];
		return Html::a($this->id, $url, $options);
	}

}

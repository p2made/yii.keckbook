<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use common\models\User;

/**
 * This is the model class for table "profile".
 *
 * @property string $id
 * @property string $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property integer $gender_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Gender $gender
 */
class Profile extends \yii\db\ActiveRecord
{
	/**
	 * tableName
	 */
	public static function tableName()
	{
		return 'profile';
	}

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
		return [
			[['user_id', 'gender_id'], 'required'],
			[['user_id', 'gender_id'], 'integer'],
			[['gender_id'],'in', 'range'=>array_keys($this->getGenderList())],
			[['first_name', 'last_name'], 'string'],
			[['birthdate'], 'date', 'format'=>'Y-m-d'],
			[['birthdate', 'created_at', 'updated_at'], 'safe']
		];
	}

	/**
	 * attribute labels
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'birthdate' => 'Birthdate',
			'gender_id' => 'Gender ID',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
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

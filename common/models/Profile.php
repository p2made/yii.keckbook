<?php
namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;
use yii\db\Expression;
use common\models\User;

/**
 * This is the model class for table "p2m_profile".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property integer $gender_id
 * @property string $about
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
	 * @property Gender $gender
	 * @property User $user
 */
class Profile extends \common\models\base\ProfileBase
{
	/**
	 * behaviors to control time stamp, don't forget to use statement for expression
	 */
	public function behaviors()
	{
		return [
			BlameableBehavior::className(),
			TimestampBehavior::className(),
		];
	}

	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [
			[['user_id', 'gender_id'], 'required'],
			[['user_id', 'gender_id'], 'integer'],
			[['user_id'], 'unique'],
			[['first_name', 'last_name'], 'string', 'max' => 64],
			[['birthdate'], 'date', 'format'=>'Y-m-d'],
			//[['birthdate'], 'date', 'format'=>'php:Y-m-d'],
			[['gender_id'],'in', 'range'=>array_keys($this->getGenderList())],
			[['about'], 'string'],
			[['birthdate', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'safe']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'user_id' => 'User ID',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'birthdate' => 'Birthdate',
			'gender_id' => 'Gender ID',
			'about' => 'About',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',

			'genderName' => Yii::t('app', 'Gender'),
			'userLink' => Yii::t('app', 'User'),
			'profileIdLink' => Yii::t('app', 'Profile'),
		];
	}

	/*
	public function beforeValidate()
	{
		if ($this->birthdate != null) {
			$new_date_format = date('Y-m-d', strtotime($this->birthdate));
			$this->birthdate = $new_date_format;
		}

		return parent::beforeValidate();
	}
	*/

	//*** relationships ***//

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
		return ArrayHelper::map($droptions, 'id', 'name');
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

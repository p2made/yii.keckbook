<?php

namespace common\models\base;

use Yii;
use common\models\Gender;
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
class ProfileBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%profile}}';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
			[['user_id', 'first_name', 'last_name', 'birthdate'], 'required'],
			[['user_id', 'gender_id', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['birthdate'], 'safe'],
			[['about'], 'string'],
			[['first_name', 'last_name'], 'string', 'max' => 64],
			[['user_id'], 'unique']
		];
}

/**
* @inheritdoc
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
	'about' => 'About',
	'created_at' => 'Created At',
	'created_by' => 'Created By',
	'updated_at' => 'Updated At',
	'updated_by' => 'Updated By',
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
	public function getUser()
	{
	return $this->hasOne(User::className(), ['id' => 'user_id']);
	}
}

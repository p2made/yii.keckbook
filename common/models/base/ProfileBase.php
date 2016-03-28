<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%profile}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property integer $gender_id
 * @property string $created_at
 * @property string $updated_at
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
			[['user_id', 'gender_id', 'created_at', 'updated_at'], 'required'],
			[['user_id', 'gender_id'], 'integer'],
			[['first_name', 'last_name'], 'string'],
			[['birthdate', 'created_at', 'updated_at'], 'safe'],
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
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}
}

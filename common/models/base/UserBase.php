<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%user}}".
*
	* @property integer $id
	* @property string $username
	* @property string $auth_key
	* @property string $password_hash
	* @property string $password_reset_token
	* @property string $email
	* @property integer $role_id
	* @property integer $status_id
	* @property integer $user_type_id
	* @property string $created_at
	* @property string $updated_at
*/
class UserBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%user}}';
}

/**
* @inheritdoc
*/
public function rules()
{
		return [
			[['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
			[['role_id', 'status_id', 'user_type_id'], 'integer'],
			[['created_at', 'updated_at'], 'safe'],
			[['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
			[['auth_key'], 'string', 'max' => 32],
			[['username'], 'unique'],
			[['email'], 'unique'],
			[['password_reset_token'], 'unique'],
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'username' => 'Username',
	'auth_key' => 'Auth Key',
	'password_hash' => 'Password Hash',
	'password_reset_token' => 'Password Reset Token',
	'email' => 'Email',
	'role_id' => 'Role ID',
	'status_id' => 'Status ID',
	'user_type_id' => 'User Type ID',
	'created_at' => 'Created At',
	'updated_at' => 'Updated At',
];
}
}
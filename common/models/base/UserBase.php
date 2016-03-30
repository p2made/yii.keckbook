<?php

namespace common\models\base;

use Yii;
use common\models\Profile;
use common\models\Role;
use common\models\Status;
use common\models\UserType;

/*
 * This is the model class for table "p2m_user".
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
 * @property integer $created_at
 * @property integer $updated_at
 *
 * * @property Profile[] $profiles
 * * @property Role $role
 * * @property Status $status
 * * @property UserType $userType
 */

class UserBase extends \yii\db\ActiveRecord
{

	/*
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%user}}';
	}

	/*
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['username', 'auth_key', 'password_hash', 'email'], 'required'],
			[['role_id', 'status_id', 'user_type_id', 'created_at', 'updated_at'], 'integer'],
			[['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
			[['auth_key'], 'string', 'max' => 32]
		];
	}

	/*
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

	/*
	 * @return \yii\db\ActiveQuery
	 */
	public function getProfiles()
	{
		return $this->hasMany(Profile::className(), ['user_id' => 'id']);
	}

	/*
	 * @return \yii\db\ActiveQuery
	 */
	public function getRole()
	{
		return $this->hasOne(Role::className(), ['id' => 'role_id']);
	}

	/*
	 * @return \yii\db\ActiveQuery
	 */
	public function getStatus()
	{
		return $this->hasOne(Status::className(), ['id' => 'status_id']);
	}

	/*
	 * @return \yii\db\ActiveQuery
	 */
	public function getUserType()
	{
		return $this->hasOne(UserType::className(), ['id' => 'user_type_id']);
	}
}

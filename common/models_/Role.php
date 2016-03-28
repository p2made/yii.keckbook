<?php
namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "p2m_role".
 *
 * @property integer $id
 * @property string $name
 * @property integer $value
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * * @property User[] $users
 */
class Role extends \common\models\base\RoleBase
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
	public function rules()
	{
		return [
			[['role_name', 'role_value', 'created_at', 'updated_at'], 'required'],
			[['role_value'], 'integer'],
			[['created_at', 'updated_at'], 'safe'],
			[['role_name'], 'string', 'max' => 45],
			[['name', 'value'], 'unique'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'role_name' => 'Role Name',
			'role_value' => 'Role Value',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUsers()
	{
		return $this->hasMany(User::className(), ['role_id' => 'id']);
	}
}

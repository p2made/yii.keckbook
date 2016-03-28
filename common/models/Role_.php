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
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
	 * @property User[] $users
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
	public function rules() {
		return [
			[['name', 'value'], 'required'],
			[['value', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['description'], 'string'],
			[['name'], 'string', 'max' => 64],
			[['name', 'value'], 'unique'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Role Name',
			'value' => 'Role Value',
			'description' => 'Description',
			'created_at' => 'Created At',
			'created_by' => 'Created By',
			'updated_at' => 'Updated At',
			'updated_by' => 'Updated By',
		];
	}
}
?>


<?php

namespace common\models\base;

use Yii;
use common\models\User;

/**
* This is the model class for table "p2m_role".
*
 * @property integer $id
 * @property string $name
 * @property integer $value
 * @property string $description
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 *
		 * @property User[] $users
 */
class RoleBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%role}}';
}

/**
* @inheritdoc
*/
public function rules()
{
return [
			[['name', 'value'], 'required'],
			[['value', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['description'], 'string'],
			[['name'], 'string', 'max' => 64],
			[['name'], 'unique'],
			[['value'], 'unique']
		];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
	'id' => 'ID',
	'name' => 'Name',
	'value' => 'Value',
	'description' => 'Description',
	'created_at' => 'Created At',
	'created_by' => 'Created By',
	'updated_at' => 'Updated At',
	'updated_by' => 'Updated By',
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

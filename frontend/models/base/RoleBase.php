<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "{{%role}}".
*
    * @property integer $id
    * @property string $role_name
    * @property integer $role_value
    * @property string $created_at
    * @property string $updated_at
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
            [['role_name', 'role_value', 'created_at', 'updated_at'], 'required'],
            [['role_value'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['role_name'], 'string', 'max' => 45],
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
}
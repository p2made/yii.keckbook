<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "{{%user_type}}".
*
    * @property integer $id
    * @property string $user_type_name
    * @property integer $user_type_value
    * @property integer $created_at
    * @property integer $updated_at
*/
class UserTypeBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%user_type}}';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['user_type_name', 'user_type_value', 'created_at', 'updated_at'], 'required'],
            [['user_type_value', 'created_at', 'updated_at'], 'integer'],
            [['user_type_name'], 'string', 'max' => 45],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'user_type_name' => 'User Type Name',
    'user_type_value' => 'User Type Value',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
];
}
}
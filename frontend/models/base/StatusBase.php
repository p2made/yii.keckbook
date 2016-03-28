<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "{{%status}}".
*
    * @property integer $id
    * @property string $status_name
    * @property integer $status_value
    * @property string $created_at
    * @property string $updated_at
*/
class StatusBase extends \yii\db\ActiveRecord
{
/**
* @inheritdoc
*/
public static function tableName()
{
return '{{%status}}';
}

/**
* @inheritdoc
*/
public function rules()
{
        return [
            [['status_name', 'status_value', 'created_at', 'updated_at'], 'required'],
            [['status_value'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['status_name'], 'string', 'max' => 45],
        ];
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return [
    'id' => 'ID',
    'status_name' => 'Status Name',
    'status_value' => 'Status Value',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
];
}
}
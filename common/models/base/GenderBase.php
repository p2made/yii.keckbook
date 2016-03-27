<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "{{%gender}}".
*
	* @property integer $id
	* @property string $gender_name
*/
class GenderBase extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return '{{%gender}}';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['gender_name'], 'required'],
			[['gender_name'], 'string', 'max' => 45],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'gender_name' => 'Gender Name',
		];
	}
}

<?php
namespace common\models;

/**
* This is the model class for table "p2m_gender".
*
 * @property integer $id
 * @property string $name
 *
		 * @property Profile[] $profiles
 */
class GenderBase extends \yii\db\ActiveRecord
{

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


	/**
 * @return \yii\db\ActiveQuery
 */
	public function getProfiles()
	{
	return $this->hasMany(Profile::className(), ['gender_id' => 'id']);
	}
}

<?php
class Profile extends \common\models\base\ProfileBase
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

	/*
	public function beforeValidate()
	{
		if ($this->birthdate != null) {
			$new_date_format = date('Y-m-d', strtotime($this->birthdate));
			$this->birthdate = $new_date_format;
		}

		return parent::beforeValidate();
	}
	*/

	//*** relationships ***//

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getGenderName()
	{
		return $this->gender->name;
	}

	/**
	 * get list of genders for dropdown
	 */
	public static function getGenderList()
	{
		$droptions = Gender::find()->asArray()->all();
		return ArrayHelper::map($droptions, 'id', 'name');
	}

	/**
	 * @get Username
	 */
	public function getUsername()
	{
		return $this->user->username;
	}

	/**
	 * @getUserId
	 */
	public function getUserId()
	{
		return $this->user ? $this->user->id : 'none';
	}

	/**
	 * @getUserLink
	 */
	public function getUserLink()
	{
		$url = Url::to(['user/view', 'id'=>$this->UserId]);
		$options = [];
		return Html::a($this->getUserName(), $url, $options);
	}

	/**
	 * @getProfileLink
	 */
	public function getProfileIdLink()
	{
		$url = Url::to(['profile/update', 'id'=>$this->id]);
		$options = [];
		return Html::a($this->id, $url, $options);
	}
}
?>


<?php
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
 * @return \yii\db\ActiveQuery
 */
	public function getGender()
	{
	return $this->hasOne(Gender::className(), ['id' => 'gender_id']);
	}

	/**
 * @return \yii\db\ActiveQuery
 */
	public function getUser()
	{
	return $this->hasOne(User::className(), ['id' => 'user_id']);
	}
}


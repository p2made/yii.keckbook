<?php
	/**
	 * @return \yii\db\ActiveQuery
	 */
	 public function getGenderName()
	 {
		return $this->gender->gender_name;
	 }

	/**
	 * get list of genders for dropdown
	 */
	public static function getGenderList()
	{
		$droptions = Gender::find()->asArray()->all();
		return ArrayHelper::map($droptions, 'id', 'gender_name');
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUser()
	{
		return $this->hasOne(User::className(), ['id' => 'user_id']);
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



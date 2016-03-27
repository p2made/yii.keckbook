
	public function getUserType()
	{
		return $this->hasOne(UserType::className(), ['id' => 'user_type_id']);
	}

	/**
	 * get user type name
	 */
	public function getUserTypeName()
	{
		return $this->userType ? $this->userType->user_type_name : '- no user type -';
	}

	/**
	 * get list of user types for dropdown
	 */
	public static function getUserTypeList()
	{
		$droptions = UserType::find()->asArray()->all();
		return ArrayHelper::map($droptions, 'id', 'user_type_name');
	}

	/**
	 * get user type id
	 */
	public function getUserTypeId()
	{
		return $this->userType ? $this->userType->id : 'none';
	}



	/**
	 * get role relationship
	 */
	public function getRole()
	{
		return $this->hasOne(Role::className(), ['id' => 'role_id']);
	}

	/**
	 * get role name
	 */
	public function getRoleName()
	{
		return $this->role ? $this->role->role_name : '- no role -';
	}

	/**
	 * get list of roles for dropdown
	 */
	public static function getRoleList()
	{
		$droptions = Role::find()->asArray()->all();
		return ArrayHelper::map($droptions, 'id', 'role_name');
	}


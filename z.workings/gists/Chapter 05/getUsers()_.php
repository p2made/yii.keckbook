		public function getUsers()
		{
			return $this->hasMany(User::className(), ['user_type_id' => 'user_type_value']);
		}
	
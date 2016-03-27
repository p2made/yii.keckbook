	/**
	 * get status relation
	 *
	 */
	public function getStatus()
	{
		return $this->hasOne(Status::className(), ['status_value' => 'status_id']);
	}

	/**
	 * * get status name
	 *
	 */
	public function getStatusName()
	{
		return $this->status ? $this->status->status_name : '- no status -';
	}

	/**
	 * get list of statuses for dropdown
	 */
	public static function getStatusList()
	{
		$droptions = Status::find()->asArray()->all();
		return ArrayHelper::map($droptions, 'status_value', 'status_name');
	}

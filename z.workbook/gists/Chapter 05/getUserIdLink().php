	/**
	 * get user id Link
	 *
	 */
	public function getUserIdLink()
	{
		$url = Url::to(['user/update', 'id'=>$this->id]);
		$options = [];
		return Html::a($this->id, $url, $options);
	}

	/**
	 * @getUserLink
	 *
	 */
	public function getUserLink()
	{
		$url = Url::to(['user/view', 'id'=>$this->id]);
		$options = [];
		return Html::a($this->username, $url, $options);
	}

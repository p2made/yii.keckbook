	/**
	 * @getProfileId
	 */
	public function getProfileId()
	{
		return $this->profile ? $this->profile->id : 'none';
	}

	/**
	 * @getProfileLink
	 */
	public function getProfileLink()
	{
		$url = Url::to(['profile/view', 'id'=>$this->profileId]);
		$options = [];
		return Html::a($this->profile ? 'profile' : 'none', $url, $options);
	}



<?php
	public function beforeValidate()
	{
		if ($this->birthdate != null) {
			$new_date_format = date('Y-m-d', strtotime($this->birthdate));
			$this->birthdate = $new_date_format;
		}

		return parent::beforeValidate();
	}

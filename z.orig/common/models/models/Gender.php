<?php

namespace common\models;

class Gender extends \common\models\base\GenderBase
{
	/**
	 * @inheritdoc
	 */
	public function attributeLabels() {
		return [
			'id' => 'ID',
			'name' => 'Gender',
		];
	}
}

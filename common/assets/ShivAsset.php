<?php

namespace common\assets;

use yii\web\AssetBundle;

class ShivAsset extends AssetBundle
{
	public $sourcePath = null;
	public $cssOptions = [
		'condition' => 'lte IE9'
	];
	public $css = [
		'//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
		'//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js',
	];
	public $js = [];
	public $depends = [];
}

<?php

namespace common\assets;

use yii\web\AssetBundle;

class FullCalendarAsset extends AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @vendor alias used.
	public $sourcePath = null;
	public $css = [
		'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css',
		'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.print.css',
	];
	public $js = [
		'//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js',
		'//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js',
		'https://cdn.myfestivalsapp.dev/frontend/js/cal/default.js',
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
		'common\assets\FontAwesomeAsset',
	];
}

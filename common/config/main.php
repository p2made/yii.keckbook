<?php
$_urlBase = 'thebook.dev';
$_urlBaseBackend = '//hq.' . $_urlBase;
$_urlBaseFrontend = '//' . $_urlBase;

return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'sourcePath' => null,
					'js' => ['//code.jquery.com/jquery-1.11.2.min.js'],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null,
					'css' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'js' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null,
					'css' => ['//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'],
					'js' => ['//code.jquery.com/ui/1.11.2/jquery-ui.min.js'],
				],
			],
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'suffix' => '.p2m',
			'rules' => [
				// your rules go here
			],
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
];

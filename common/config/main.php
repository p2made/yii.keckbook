<?php
/**
 * main.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

use \kartik\datecontrol\Module;

$_urlBase = 'keckbook.yii.dev';
$_urlBaseBackend = '//hq.' . $_urlBase;
$_urlBaseFrontend = '//'   . $_urlBase;

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
					'css' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null,
					'js' => ['//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null,
					'css' => ['//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'],
					'js' => ['//code.jquery.com/ui/1.11.2/jquery-ui.min.js'],
				],
				/*
				'yii\web\JqueryAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\bootstrap\BootstrapAsset' => [
					'sourcePath' => null, 'css' => [],
				],
				'yii\bootstrap\BootstrapPluginAsset' => [
					'sourcePath' => null, 'js' => [],
				],
				'yii\jui\JuiAsset' => [
					'sourcePath' => null, 'css' => [], 'js' => [],
				],
				'\rmrevin\yii\fontawesome\AssetBundle' => [
					'sourcePath' => null, 'css' => [],
				],
				*/
			],
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			//'enableStrictParsing' => true,
			'suffix' => '.p2m',
			'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
				'<view:[a-zA-Z0-9-]+>/'=>'site/page',
			]
		],
		'urlManagerBackEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseBackend,
		],
		'urlManagerFrontEnd' => [
			'class' => 'yii\web\urlManager',
			'baseUrl' => $_urlBaseFrontend,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],

	'modules' => [
		'datecontrol' =>  [
			'class' => 'kartik\datecontrol\Module',
			// format settings for displaying each date attribute (ICU format example)
			'displaySettings' => [
				Module::FORMAT_DATE => 'yyyy-MM-dd',
				Module::FORMAT_TIME => 'HH:mm:ss a',
				Module::FORMAT_DATETIME => 'yyyy-MM-dd HH:mm',
			],
			// format settings for saving each date attribute (PHP format example)
			'saveSettings' => [
				Module::FORMAT_DATE => 'php:Y-m-d', // saves as unix timestamp
				Module::FORMAT_TIME => 'php:H:i:s',
				Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
			],
			// set your display timezone
			//'displayTimezone' => 'Australia/Brisbane',
			// set your timezone for date saved to db
			//'saveTimezone' => 'UTC',
			// automatically use kartik\widgets for each of the above formats
			'autoWidget' => true,
			// default settings for each widget from kartik\widgets used when autoWidget is true
			'autoWidgetSettings' => [
				Module::FORMAT_DATE => ['type'=>2, 'pluginOptions'=>['autoclose'=>true]], // example
				//Module::FORMAT_DATETIME => [], // setup if needed
				//Module::FORMAT_TIME => [], // setup if needed
			],
			// custom widget settings that will be used to render the date input instead of kartik\widgets,
			// this will be used when autoWidget is set to false at module or widget level.
			'widgetSettings' => [
				Module::FORMAT_DATE => [
					'class' => 'yii\jui\DatePicker', // example
					'options' => [
						'dateFormat' => 'php:d-M-Y',
						'options' => ['class'=>'form-control'],
					],
				],
			],
		],
	],
];

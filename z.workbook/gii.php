<?php

	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'allowedIPs' => ['127.0.0.1', '::1'],
			'generators' => [
				'doubleModel' => [ // claudejanz/yii2-mygii
					'class' => 'claudejanz\mygii\generators\model\Generator',
				],
				'modal_crud' => [ // conquer/gii-modal
					'class' => 'conquer\gii\templates\crud\Generator', // generator class
				],
				'crud' => [ //deesoft/yii2-gii
					'class' => 'dee\gii\generators\crud\Generator'
				],
				'angular' => [ //deesoft/yii2-gii
					'class' => 'dee\gii\generators\angular\Generator'
				],
				'mvc' => [ //deesoft/yii2-gii
					'class' => 'dee\gii\generators\mvc\Generator'
				],
				'migration' => [ //deesoft/yii2-gii
					'class' => 'dee\gii\generators\migration\Generator'
				],
				'crud' => [ // mdmsoft/yii2-gii
					'class' => 'mdm\gii\generators\crud\Generator'
				],
				'mvc' => [ // mdmsoft/yii2-gii
					'class' => 'mdm\gii\generators\mvc\Generator'
				],
				'migration' => [ // mdmsoft/yii2-gii
					'class' => 'mdm\gii\generators\migration\Generator'
				],
				'sintret' => [ // sintret/yii2-gii-adminlte
					'class' => 'sintret\gii\generators\crud\Generator',
				],
				'sintretModel' => [ // sintret/yii2-gii-adminlte
					'class' => 'sintret\gii\generators\model\Generator'
				],
				'giiMigration' => [ // wilwade/gii-migration
					'class' => 'wilwade\giiMigration\generators\migration\Generator',
					//Optional:
					'defaultColumns' => [],
					'baseClass' => 'yii\db\Migration',
				],
				'enumerable' => [ // yii2mod/yii2-gii-extended
					'class' => 'yii2mod\gii\enum\Generator',
				],
				'crud' => [ // yii2mod/yii2-gii-extended
					'class' => 'yii2mod\gii\crud\Generator',
				],
			],
		],

		'gridview' => [ // for mootensai/yii2-enhanced-gii
			'class' => '\kartik\grid\Module',
		],
	],



yii2-p2y2-gii-collection v0.0.5
===============================

# Installation

Add...

```
	"p2made/yii2-p2y2-gii-collection": "dev-master"
```

to the `require-dev` section of your `composer.json` file & p2y2-things will be installed next time you run `composer update`.

# Extensions

```
		"claudejanz/yii2-mygii": "dev-master",
		"conquer/gii-modal": "*",
		"deesoft/yii2-gii": "~1.0",
		"mdmsoft/yii2-gii": "~1.0",
		"mootensai/yii2-enhanced-gii": "@dev",
		"schmunk42/yii2-giiant": "@stable",
		"sintret/yii2-gii-adminlte": "dev-master",
		"wilwade/gii-migration": "dev-master",
		"yii2mod/yii2-gii-extended": "*",
```


## claudejanz/yii2-mygii

* [packagist](https://packagist.org/packages/claudejanz/yii2-mygii)
* [github](https://github.com/claudejanz/yii2-mygii)

```
		"claudejanz/yii2-mygii": "dev-master",
```

```
composer require claudejanz/yii2-mygii:"dev-master"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'generators' => [
				'doubleModel' => [ // claudejanz/yii2-mygii
					'class' => 'claudejanz\mygii\generators\model\Generator',
				],
			],
		],
	],
```


## conquer/gii-modal

* [packagist](https://packagist.org/packages/conquer/gii-modal)
* [github](https://github.com/conquer/gii-modal)

```
		"conquer/gii-modal": "*",
```

```
composer require conquer/gii-modal:"*"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'allowedIPs' => ['127.0.0.1', '::1'],
			'generators' => [
				'modal_crud' => [ // conquer/gii-modal
					'class' => 'conquer\gii\templates\crud\Generator', // generator class
				]
			],
		],
	],
```


## deesoft/yii2-gii

* [packagist](https://packagist.org/packages/deesoft/yii2-gii)
* [github](https://github.com/deesoft/yii2-gii)

```
		"deesoft/yii2-gii": "~1.0",
```

```
composer require deesoft/yii2-gii:"~1.0"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'generators' => [
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
			],
		],
	],
```


## mdmsoft/yii2-gii

* [packagist](https://packagist.org/packages/mdmsoft/yii2-gii)
* [github](https://github.com/mdmsoft/yii2-gii)

```
		"mdmsoft/yii2-gii": "~1.0",
```

```
composer require mdmsoft/yii2-gii:"~1.0"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'generators' => [
				'crud' => [ // mdmsoft/yii2-gii
					'class' => 'mdm\gii\generators\crud\Generator'
				],
				'mvc' => [ // mdmsoft/yii2-gii
					'class' => 'mdm\gii\generators\mvc\Generator'
				],
				'migration' => [ // mdmsoft/yii2-gii
					'class' => 'mdm\gii\generators\migration\Generator'
				],
			],
		],
	],
```


## mootensai/yii2-enhanced-gii

* [packagist](https://packagist.org/packages/mootensai/yii2-enhanced-gii)
* [github](https://github.com/mootensai/yii2-enhanced-gii)

```
		"mootensai/yii2-enhanced-gii": "@dev",
```

```
composer require mootensai/yii2-enhanced-gii:"@dev"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gridview' => [
			'class' => '\kartik\grid\Module',
		],
	],
```


## schmunk42/yii2-giiant

* [packagist](https://packagist.org/packages/schmunk42/yii2-giiant)
* [github](https://github.com/schmunk42/yii2-giiant)

```
		"schmunk42/yii2-giiant": "@stable",
```

```
composer require schmunk42/yii2-giiant:"@stable"
```

### Usage


## sintret/yii2-gii-adminlte

* [packagist](https://packagist.org/packages/sintret/yii2-gii-adminlte)
* [github](https://github.com/sintret/yii2-gii-adminlte)

```
		"sintret/yii2-gii-adminlte": "dev-master",
```

```
composer require sintret/yii2-gii-adminlte:"dev-master"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'generators' => [
				'sintret' => [ // sintret/yii2-gii-adminlte
					'class' => 'sintret\gii\generators\crud\Generator',
				],
				'sintretModel' => [ // sintret/yii2-gii-adminlte
					'class' => 'sintret\gii\generators\model\Generator'
				],
			],
		],
	],
```


## wilwade/gii-migration

* [packagist](https://packagist.org/packages/wilwade/gii-migration)
* [github](https://github.com/wilwade/gii-migration)

```
		"wilwade/gii-migration": "dev-master",
```

```
composer require wilwade/gii-migration:"dev-master"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'generators' => [
				'giiMigration' => [ // wilwade/gii-migration
					'class' => 'wilwade\giiMigration\generators\migration\Generator',
					//Optional:
					'defaultColumns' => [],
					'baseClass' => 'yii\db\Migration',
				],
			],
		],
	],
```


##### ^ ----- ^ ----- ^ ----- ^ ----- ^ ----- ^ ----- ^


### yii2mod/yii2-gii-extended

* [packagist](https://packagist.org/packages/yii2mod/yii2-gii-extended)
* [github](https://github.com/yii2mod/yii2-gii-extended)

```
		"yii2mod/yii2-gii-extended": "*",
```

```
composer require yii2mod/yii2-gii-extended:"*"
```

### Usage

```php
	//Add this into common/config/main-local.php
	'bootstrap' => 'gii',
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'generators' => [
				'enumerable' => [ // yii2mod/yii2-gii-extended
					'class' => 'yii2mod\gii\enum\Generator',
				],
				'crud' => [ // yii2mod/yii2-gii-extended
					'class' => 'yii2mod\gii\crud\Generator',
				],
			],
		],
	],
```



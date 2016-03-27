<?php
/**
 * params.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

use kartik\datecontrol\Module;

return [
	'adminEmail' => 'admin@example.com',
	'supportEmail' => 'support@example.com',
	'user.passwordResetTokenExpire' => 3600,

	'p2made' => [
//		'cdnEnd' => '//cdn.development.yii.dev',
		'useCdn' => true, // false to use published assets
		'reverseDomain' => 'dev.yii.tryout',
	],

	// format settings for displaying each date attribute (ICU format example)
	'dateControlDisplay' => [
		Module::FORMAT_DATE => 'yyyy-MM-dd',
		Module::FORMAT_TIME => 'HH:mm:ss a',
		Module::FORMAT_DATETIME => 'yyyy-MM-dd HH:mm',
	],
	// format settings for saving each date attribute (PHP format example)
	'dateControlSave' => [
		Module::FORMAT_DATE => 'php:Y-m-d', // saves as unix timestamp
		Module::FORMAT_TIME => 'php:H:i:s',
		Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
	],
];

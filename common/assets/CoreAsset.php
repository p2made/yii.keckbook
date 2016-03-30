<?php
/**
 * CoreAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

namespace common\assets;

use yii\web\AssetBundle;

class CoreAsset extends AssetBundle
{
	public $sourcePath = '@common/assets/lib';

	//public $basePath = null;
	//public $baseUrl = null;

	//public $basePath = '@webroot';
	//public $baseUrl = '@web';

	public $css = [
		'css/keckbook.css',
	];

	public $js = [
		//'js/yii.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\FontAwesomeAsset',
	];
}

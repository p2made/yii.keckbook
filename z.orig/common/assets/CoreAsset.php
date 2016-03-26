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
	//public $sourcePath = '@vendor/p2made/yii2-p2y2-things-demo/assets/lib';

	public $basePath = null;
	public $baseUrl = null;

	//public $basePath = '@webroot';
	//public $baseUrl = '@web';

	public $css = [];

	public $js = [];

	public $depends = [
		'yii\web\YiiAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\FontAwesomeAsset',
		//'p2made\assets\JuiAsset',
	];
}

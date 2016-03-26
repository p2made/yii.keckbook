<?php
/**
 * index.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

// load assets...
p2made\assets\JqueryAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\JuiAsset::register($this);

p2made\demo\Things\assets\ThingsDemoAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

/* @var $this yii\web\View */
$this->title = 'is.gd';
$this->params['breadcrumbs'][] = $this->title;

$sampleUrl = 'http://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=louth&sll=53.800651,-4.064941&sspn=33.219383,38.803711&ie=UTF8&hq=&hnear=Louth,+United+Kingdom&ll=53.370272,-0.004034&spn=0.064883,0.075788&z=14';
$shortenedUrl = \p2made\helpers\isgd\IsGdHelpers::shortenUrl($sampleUrl);
?>
<div class="site-index">

	<div class="jumbotron">
		<h1>is.gd</h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-12">
				<p><strong>Full URL:</strong> <a href="<?= $sampleUrl ?>" target="_blank"><?= $sampleUrl ?></a></p>
				<p><strong>Shortened URL:</strong> <a href="<?= $shortenedUrl ?>" target="_blank"><?= $shortenedUrl ?></a></p>
			</div>
		</div>

	</div>
</div>




<?php
/**
 * uuid.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;

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
$this->title = 'UUIDs';
$this->params['breadcrumbs'][] = $this->title;

/*
yii\web\YiiAsset::register($this);

p2made\demo\Things\assets\ThingsDemoAsset::register($this);
p2made\demo\Things\demo\ThingsDemoAsset::register($this);

p2made\assets\AnimateAsset::register($this);
p2made\assets\BootstrapAsset::register($this);
p2made\assets\BootstrapPluginAsset::register($this);
p2made\assets\BootstrapSocialAsset::register($this);
p2made\assets\DataTablesAsset::register($this);
p2made\assets\ExcanvasAsset::register($this);
p2made\assets\FitvidsAsset::register($this);
p2made\assets\FlotChartsAsset::register($this);
p2made\assets\FontAwesomeAsset::register($this);
p2made\assets\FullCalendarAsset::register($this);
p2made\assets\GMapsAsset::register($this);
p2made\assets\HolderAsset::register($this);
p2made\assets\IsotopeAsset::register($this);
p2made\assets\JqueryAsset::register($this);
p2made\assets\JqueryCountToAsset::register($this);
p2made\assets\JqueryMigrateAsset::register($this);
p2made\assets\JuiAsset::register($this);
p2made\assets\MasonryAsset::register($this);
p2made\assets\MetisMenuAsset::register($this);
p2made\assets\MomentAsset::register($this);
p2made\assets\MomentTimezoneAsset::register($this);
p2made\assets\MorrisAsset::register($this);
p2made\assets\PrettyPhotoAsset::register($this);
p2made\assets\PrettySociableAsset::register($this);
p2made\assets\RaphaelAsset::register($this);
p2made\assets\SweetAlertAsset::register($this);
p2made\assets\TimelineAsset::register($this);
p2made\assets\WowAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

		'p2made\assets\AnimateAsset',
		'p2made\assets\BootstrapAsset',
		'p2made\assets\BootstrapPluginAsset',
		'p2made\assets\BootstrapSocialAsset',
		'p2made\assets\DataTablesAsset',
		'p2made\assets\ExcanvasAsset',
		'p2made\assets\FitvidsAsset',
		'p2made\assets\FlotChartsAsset',
		'p2made\assets\FontAwesomeAsset',
		'p2made\assets\FullCalendarAsset',
		'p2made\assets\GMapsAsset',
		'p2made\assets\HolderAsset',
		'p2made\assets\IsotopeAsset',
		'p2made\assets\JqueryAsset',
		'p2made\assets\JqueryCountToAsset',
		'p2made\assets\JqueryMigrateAsset',
		'p2made\assets\JuiAsset',
		'p2made\assets\MasonryAsset',
		'p2made\assets\MetisMenuAsset',
		'p2made\assets\MomentAsset',
		'p2made\assets\MomentTimezoneAsset',
		'p2made\assets\MorrisAsset',
		'p2made\assets\PrettyPhotoAsset',
		'p2made\assets\PrettySociableAsset',
		'p2made\assets\RaphaelAsset',
		'p2made\assets\SweetAlertAsset',
		'p2made\assets\TimelineAsset',
		'p2made\assets\WowAsset',

		'p2made\assets\Html5shivAsset',
		'p2made\assets\PrintShivAsset',
 */
?>
<div class="site-index">

	<div class="jumbotron">
		<h1>UUIDs!</h1>
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-4">
				<ul>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<ul>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
				</ul>
			</div>
			<div class="col-lg-4">
				<ul>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
					<li><?= \p2made\helpers\Uuid\UuidHelpers::uuid() ?></li>
				</ul>
			</div>
		</div>

	</div>
</div>

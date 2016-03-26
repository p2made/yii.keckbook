<?php
/**
 * morris.php
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
p2made\assets\MorrisAsset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.
p2made\demo\Things\demo\MorrisDemoAsset::register($this);

p2made\assets\Html5shivAsset::register($this);
p2made\assets\PrintShivAsset::register($this);

/* @var $this yii\web\View */

$this->title = 'Morris.js Charts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content-wrapper">
	<h1><?= Html::encode($this->title) ?></h1>

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">Quarterly Apple iOS device unit sales</div>
					<div id="morris-area-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">iPhone CPU benchmarks</div>
					<div id="morris-bar-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	<div class="row">
	</div><!-- /.row -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Line Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">Jaguar 'E' Type vehicles in the UK</div>
					<div id="morris-line-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<i class="fa fa-bar-chart-o fa-fw"></i> Donut Chart Example
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<div class="caption">Donut flavours</div>
					<div id="morris-donut-chart"></div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	<div class="row">
	</div><!-- /.row -->
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Morris.js Usage
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<p>Morris.js is a jQuery based charting plugin created by Olly Smith. In SB Admin, we are using the most recent version of Morris.js which includes the resize function, which makes the charts fully responsive. The documentation for Morris.js is available on their website, <a target="_blank" href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a>.</p>
					<a target="_blank" class="btn btn-default btn-lg btn-block" href="http://morrisjs.github.io/morris.js/">View Morris.js Documentation</a>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
</div><!-- /#content-wrapper -->

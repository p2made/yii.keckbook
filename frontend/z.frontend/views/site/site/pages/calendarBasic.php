<?php
/**
 * pages/calendar/basic-views.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\helpers\Url;
use p2made\models\FullCalendarEvent;
use p2made\widgets\FullCalendarWidget;

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
$this->title = 'Calendar Basic';
$this->params['breadcrumbs'][] = $this->title;

$events = array();

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'All Day Event';
	$newEvent->start = date('2015-06-01');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Long Event';
	$newEvent->start = date('2015-06-07');
	$newEvent->end = date('2015-06-10');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date('2015-06-09T16:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->id = 999;
	$newEvent->title = 'Repeating Event';
	$newEvent->start = date('2015-06-16T16:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Conference';
	$newEvent->start = date('2015-06-11');
	$newEvent->end = date('2015-06-13');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date('2015-06-12T10:30:00');
	$newEvent->end = date('2015-06-12T12:30:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Lunch';
	$newEvent->start = date('2015-06-12T12:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Meeting';
	$newEvent->start = date('2015-06-12T14:30:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Happy Hour';
	$newEvent->start = date('2015-06-12T17:30:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Dinner';
	$newEvent->start = date('2015-06-12T20:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Birthday Party';
	$newEvent->start = date('2015-06-13T07:00:00');
	$events[] = $newEvent;

	$newEvent = new FullCalendarEvent();
	$newEvent->title = 'Click for Google';
	$newEvent->url = 'http://google.com/';
	$newEvent->start = date('2015-06-28');
	$events[] = $newEvent;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>
	<p><code><?= __FILE__ ?></code></p>

	<?= FullCalendarWidget::widget(array(
		'events' => $events,
	)) ?>

</div>

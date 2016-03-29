<?php
/**
 * _navigation.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2015
 * @author Pedro Plowman
 * @package p2made/yii2-p2y2-things-demo
 * @license MIT
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use p2made\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

	NavBar::begin([
		'brandLabel' => 'yii.keckbook.hq',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);

	$menuItems = array(
		['label' => 'Home', 'url' => Yii::$app->homeUrl],
		//['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'About', 'url' => ['/site/about']],
		['label' => 'Contact', 'url' => ['/site/contact']],
	);
	$menuItems[] = array('label' => 'Ends', 'items' => [
		['label' => 'Back End', 'url' => Yii::$app->urlManagerBackEnd->baseUrl],
		//['label' => 'Front End', 'url' => Yii::$app->urlManagerFrontEnd->baseUrl],
	]); // Ends
	$menuItems[] = array('label' => 'Pages', 'items' => [
		['label' => 'About', 'url' => ['/site/about']],
		['label' => 'Contact', 'url' => ['/site/contact']],
		['label' => 'is.gd Demo', 'url' => ['/site/page', 'view' => 'is-gd']],
		['label' => 'UUID Demo', 'url' => ['/site/page', 'view' => 'uuid']],
		['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
		'<li role="presentation" class="divider"></li>',
		['label' => 'Default Calendar', 'url' => ['/site/page', 'view' => 'calendar']],
		['label' => 'Basic Calendar Views', 'url' => ['/site/page', 'view' => 'calendarBasic']],
	]); // Pages
	$menuItems[] = array('label' => 'Developer', 'items' => [
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
	]); // Developer

	$userMenuItems = [];
	if (Yii::$app->user->isGuest) {
		$userMenuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
		$userMenuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
	} else {
		$userMenuItems[] = [
			'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
			'url' => ['/site/logout'],
			'linkOptions' => ['data-method' => 'post']
		];
	}

	$menuItems[] = array(
		'label' => 'User',
		'items' => $userMenuItems,
		'options' => ['class' => 'dropdown']
	);

	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
	]);

	NavBar::end();

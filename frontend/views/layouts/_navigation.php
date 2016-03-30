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

/**
 * @var $this \yii\web\View
 * @var $content string
 */

	NavBar::begin([
		'brandLabel' => 'yii.keckbook',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);

	/*
	$rightMenuItems = array(
		['label' => 'Home', 'url' => Yii::$app->homeUrl],
		//['label' => 'Home', 'url' => ['/site/index']],
	);
	 */

	$rightMenuItems = [];

	$endsMenuItems = array('label' => 'Ends', 'items' => [
		['label' => 'Back End', 'url' => Yii::$app->urlManagerBackEnd->baseUrl],
		//['label' => 'Front End', 'url' => Yii::$app->urlManagerFrontEnd->baseUrl],
	]); // Ends
	$devMenuItems = array('label' => 'Developer', 'items' => [
		['label' => 'Gii', 'url' => ['/gii']],
		['label' => 'Debug', 'url' => ['/debug']],
	]); // Developer

	if (!Yii::$app->user->isGuest) {

		$rightMenuItems = array(
			['label' => 'Pages', 'items' => [
				['label' => 'is.gd Demo', 'url' => ['/site/page', 'view' => 'is-gd']],
				['label' => 'UUID Demo', 'url' => ['/site/page', 'view' => 'uuid']],
				'<li role="presentation" class="divider"></li>',
				['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
				['label' => 'Contact', 'url' => ['/site/contact']],
			]],
			$endsMenuItems,
			$devMenuItems,
			['label' => Yii::$app->user->identity->username, 'items' => [
				['label' => 'Profile', 'url' => ['/profile/view']],
				['label' => 'Logout', 'url' => ['/site/logout'],
					'linkOptions' => ['data-method' => 'post']],
			]],
		);

	} else {

		$leftMenuItems = array(
			['label' => 'About', 'url' => ['/site/about']],
			['label' => 'Contact', 'url' => ['/site/contact']],
		);

		echo Nav::widget([
			'options' => ['class' => 'navbar-nav'],
			'items' => $leftMenuItems,
		]);

		$rightMenuItems = array(
			$endsMenuItems,
			$devMenuItems,
			['label' => 'Signup', 'url' => ['/site/signup']],
			['label' => 'Login', 'url' => ['/site/login']],
		);

	}

	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $rightMenuItems,
	]);

	NavBar::end();

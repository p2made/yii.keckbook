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

	if (!Yii::$app->user->isGuest) {

		NavBar::begin([
			'brandLabel' => 'yii.keckbook.hq',
			'brandUrl' => Yii::$app->homeUrl,
			'options' => [
				'class' => 'navbar-inverse navbar-fixed-top',
			],
		]);

		$menuItems = array(
			//['label' => 'Home', 'url' => Yii::$app->homeUrl],
			//['label' => 'Home', 'url' => ['/site/index']],

			['label' => 'Pages', 'items' => [
				['label' => 'is.gd Demo', 'url' => ['/site/page', 'view' => 'is-gd']],
				['label' => 'UUID Demo', 'url' => ['/site/page', 'view' => 'uuid']],
				'<li role="presentation" class="divider"></li>',
				['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
			]], // Pages

			['label' => 'Ends', 'items' => [
				//['label' => 'Back End', 'url' => Yii::$app->urlManagerBackEnd->baseUrl],
				//['label' => 'Front End', 'url' => Yii::$app->urlManagerFrontEnd->baseUrl],
			]], // Ends

			['label' => 'Developer', 'items' => [
				['label' => 'Gii', 'url' => ['/gii']],
				['label' => 'Debug', 'url' => ['/debug']],
			]], // Developer

			['label' => Yii::$app->user->identity->username, 'items' => [
				['label' => 'Logout', 'url' => ['/site/logout']],
			]], // User
		);

		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $menuItems,
		]);

	} else {

		NavBar::begin([
			'brandLabel' => 'yii.keckbook',
			//'brandUrl' => Yii::$app->urlManagerFrontend->baseUrl,
			'brandUrl' => 'http://keckbook.yii.dev/',
			'options' => [
				'class' => 'navbar-inverse navbar-fixed-top',
			],
		]);

		echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => [[
				'label' => 'Signup',
				//'url' => Yii::$app->urlManagerFrontend->createUrl('/site/signup')
				'url' => 'http://keckbook.yii.dev/site/signup'
			]],
		]);

	}

	NavBar::end();

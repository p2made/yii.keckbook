<?php
/**
 * navigation.php
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

?>
<?php
	NavBar::begin([
		'brandLabel' => 'P2Y2Things',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	$menuItems = [
		['label' => 'Home', 'url' => ['/site/index']],
		['label' => 'Ends', 'items' => [
			['label' => 'API', 'url' => Yii::$app->urlManagerApi->baseUrl],
			['label' => 'CDN', 'url' => Yii::$app->urlManagerStatic->baseUrl],
			['label' => 'Back End', 'url' => Yii::$app->urlManagerBackEnd->baseUrl],
			//['label' => 'Mid End', 'url' => Yii::$app->urlManagerMidend->baseUrl],
			//['label' => 'Members', 'url' => Yii::$app->urlManagerMembers->baseUrl],
			//['label' => 'Front End', 'url' => Yii::$app->urlManagerFrontEnd->baseUrl],
		]],
		['label' => 'Site', 'items' => [
			['label' => 'Festival Profile', 'url' => ['/event-profile/index']],
			['label' => 'Festival', 'url' => ['/event/index']],
			['label' => 'Location', 'url' => ['/location/index']],
			['label' => 'Service', 'url' => ['/service/index']],
			['label' => 'Service Provider', 'url' => ['/service-provider/index']],
			['label' => 'Genre', 'url' => ['/genre/index']],
			'<li role="presentation" class="divider"></li>',
			['label' => 'App Data', 'url' => ['/app-data/index']],
			['label' => 'Color', 'url' => ['/color/index']],
			['label' => 'Country', 'url' => ['/country/index']],
			['label' => 'Gender', 'url' => ['/gender/index']],
			['label' => 'Group', 'url' => ['/group/index']],
			['label' => 'Image', 'url' => ['/image/index']],
			['label' => 'Role', 'url' => ['/role/index']],
			['label' => 'Status', 'url' => ['/status/index']],
			['label' => 'Timezone', 'url' => ['/time-zone/index']],
			['label' => 'User Profile', 'url' => ['/user-profile/index']],
			['label' => 'Zone', 'url' => ['/zone/index']],
		]],
		['label' => 'Pages', 'items' => [
			['label' => 'About', 'url' => ['/site/about']],
			['label' => 'Contact', 'url' => ['/site/contact']],
			['label' => 'is.gd Demo', 'url' => ['/site/page', 'view' => 'is-gd']],
			['label' => 'UUID Demo', 'url' => ['/site/page', 'view' => 'uuid']],
			['label' => 'Blank Page', 'url' => ['/site/page', 'view' => 'blank']],
			'<li role="presentation" class="divider"></li>',
			['label' => 'Default Calendar', 'url' => ['/site/page', 'view' => 'calendar']],
			['label' => 'Basic Calendar Views', 'url' => ['/site/page', 'view' => 'calendarBasic']],
		]],
		['label' => 'Charts and Tables', 'items' => [
			['label' => 'Flot Charts', 'url' => ['/site/page', 'view' => 'flot']],
			['label' => 'Morris.js Charts', 'url' => ['/site/page', 'view' => 'morris']],
			'<li role="presentation" class="divider"></li>',
			['label' => 'Tables', 'url' => ['/site/page', 'view' => 'tables']],
		]],
		['label' => 'UI Elements', 'items' => [
			['label' => 'Panels and Wells', 'url' => ['/site/page', 'view' => 'panels-wells']],
			['label' => 'Buttons', 'url' => ['/site/page', 'view' => 'buttons']],
			['label' => 'Forms', 'url' => ['/site/page', 'view' => 'forms']],
			['label' => 'Notifications', 'url' => ['/site/page', 'view' => 'notifications']],
			['label' => 'Typography', 'url' => ['/site/page', 'view' => 'typography']],
			['label' => 'Icons', 'url' => ['/site/page', 'view' => 'icons']],
			['label' => 'Grid', 'url' => ['/site/page', 'view' => 'grid']],
			['label' => 'Shortcodes', 'url' => ['/site/page', 'view' => 'shortcodes']],
		]],
		['label' => 'Developer', 'items' => [
			['label' => 'Gii', 'url' => ['/gii']],
			['label' => 'Debug', 'url' => ['/debug']],
		]],
	];
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
	$menuItems[] = [
		'label' => 'User',
		'items' => $userMenuItems,
		'options' => ['class' => 'dropdown']
	];
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items' => $menuItems,
	]);
	NavBar::end();
?>

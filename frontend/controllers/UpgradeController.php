<?php
/**
 * UpgradeController.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

namespace frontend\controllers;

class UpgradeController extends \yii\web\Controller
{
	public function actionIndex()
	{
		return $this->render('index');
	}
}

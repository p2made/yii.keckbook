<?php
/**
 * RecordHelpers.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

namespace common\helpers;

use yii;

class RecordHelpers
{

	public static function userHas($model_name)
	{
		$connection = \Yii::$app->db;
		$userid = Yii::$app->user->identity->id;
		$sql = "SELECT id FROM {{%$model_name}} WHERE user_id=:userid";
		$command = $connection->createCommand($sql);
		$command->bindValue(":userid", $userid);
		$result = $command->queryOne();

		return $result != null ? $result['id'] : false;
	}

}

<?php
/**
 * RecordHelpers.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

/*
use common\helpers\RecordHelpers;
...
RecordHelpers::userHas($model_name);

\common\helpers\RecordHelpers::userHas($model_name);
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

		if ($result == null) {
			return false;
		}

		return $result['id'];
	}

}

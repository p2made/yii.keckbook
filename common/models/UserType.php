<?php
/**
 * UserType.php
 *
 * @copyright Copyright &copy; Pedro Plowman, https://github.com/p2made, 2016
 * @author Pedro Plowman
 * @package p2made/yii.keckbook
 * @license MIT
 */

namespace common\models;

class UserType extends \common\models\base\UserTypeBase
{

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUsers()
	{
	return $this->hasMany(User::className(), ['user_type_id' => 'id']);
	}

}

<?php
namespace common\helpers;

use yii;
use common\models\User;
use common\models\Role;
use common\models\Status;
use common\models\UserType;

class ValueHelpers
{
	public static function roleMatch($role_name)
	{
		$userHasRoleName = Yii::$app->user->identity->role->role_name;
		return $userHasRoleName == $role_name ? true : false;
	}

	public static function getUsersRoleValue($userId = null)
	{
		if ($userId == null){
			$usersRoleValue = Yii::$app->user->identity->role->role_value;
			return isset($usersRoleValue) ? $usersRoleValue : false;
		} else {
			$user = User::findOne($userId);
			$usersRoleValue = $user->role->role_value;
			return isset($usersRoleValue) ? $usersRoleValue : false;
		}
	}

	public static function getRoleValue($role_name)
	{
		$role = Role::find('value')->where(['name' => $role_name])->one();
		return isset($role->value) ? $role->value : false;
	}

	public static function isRoleNameValid($role_name)
	{
		$role = Role::find('role_name')->where(['role_name' => $role_name])->one();
		return isset($role->role_name) ? true : false;
	}

	public static function statusMatch($status_name)
	{
		$userHasStatusName = Yii::$app->user->identity->status->status_name;
		return $userHasStatusName == $status_name ? true : false;
	}

	public static function getStatusId($status_name)
	{
		$status = Status::find('id')->where(['status_name' => $status_name])->one();
		return isset($status->id) ? $status->id : false;
	}

	public static function userTypeMatch($user_type_name)
	{
		$userHasUserTypeName = Yii::$app->user->identity->userType->user_type_name;
		return $userHasUserTypeName == $user_type_name ? true : false;
	}

	// ----- ^ ----- ^ ----- ^ ----- ^ ----- //

	public static function getStatusValue($status_name)
	{
		$status = Status::find('value')->where(['name' => $status_name])->one();
		return isset($status->value) ? $status->value : false;
	}

	public static function getUserTypeValue($user_type_name)
	{
		$user_type = UserType::find('value')->where(['name' => $user_type_name])->one();
		return isset($user_type->value) ? $user_type->value : false;
	}
}

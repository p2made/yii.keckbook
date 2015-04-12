<?php
use yii\db\Schema;
use yii\db\Migration;

class m150411_183304_replace_user_table extends Migration
{
	protected $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

	protected function before()
	{
		echo "m150411_183304_replace_user_table destroys existing user data.\n";
	}

	public function up()
	{
		$auditTime = Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL DEFAULT 0';
		$auditUser = Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0';

		$this->before();

		$this->dropTable('{{%user}}');

		$this->createTable('{{%user}}', [
			'id' => Schema::TYPE_PK,
			'username' => Schema::TYPE_STRING . ' NOT NULL',
			'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
			'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
			'password_reset_token' => Schema::TYPE_STRING,
			'email' => Schema::TYPE_STRING . ' NOT NULL',
			'role_id' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 1',
			'status_id' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 1',
			'user_type_id' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 1',
			'created_at' => $auditTime, 'created_by' => $auditUser,
			'updated_at' => $auditTime, 'updated_by' => $auditUser,
		], $this->tableOptions);

		$this->createIndex('role_idx', '{{%user}}', 'role_id');
		$this->addForeignKey('user_role', '{{%user}}', 'role_id', '{{%role}}', 'id');
		$this->createIndex('status_idx', '{{%user}}', 'status_id');
		$this->addForeignKey('user_status', '{{%user}}', 'status_id', '{{%status}}', 'id');
		$this->createIndex('user_type_idx', '{{%user}}', 'user_type_id');
		$this->addForeignKey('user_user_type', '{{%user}}', 'user_type_id', '{{%user_type}}', 'id');
	}

	public function down()
	{
		$auditTime = Schema::TYPE_INTEGER . ' NOT NULL';

		$this->before();

		$this->dropForeignKey('user_user_type', '{{%user}}');
		$this->dropIndex('user_type_idx', '{{%user}}');
		$this->dropForeignKey('user_status', '{{%user}}');
		$this->dropIndex('status_idx', '{{%user}}');
		$this->dropForeignKey('user_role', '{{%user}}');
		$this->dropIndex('role_idx', '{{%user}}');

		$this->dropTable('{{%user}}');

		$this->createTable('{{%user}}', [
			'id' => Schema::TYPE_PK,
			'username' => Schema::TYPE_STRING . ' NOT NULL',
			'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
			'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
			'password_reset_token' => Schema::TYPE_STRING,
			'email' => Schema::TYPE_STRING . ' NOT NULL',

			'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
			'created_at' => $auditTime, 'updated_at' => $auditTime,
		], $this->tableOptions);
	}
}

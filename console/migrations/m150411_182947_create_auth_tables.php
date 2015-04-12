<?php
use yii\db\Schema;
use yii\db\Migration;

class m150411_182947_create_auth_tables extends Migration
{
	protected $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

	public function up()
	{
		$id = Schema::TYPE_PK;
		$name = Schema::TYPE_STRING . '(64) NOT NULL UNIQUE';
		$value = Schema::TYPE_SMALLINT . ' UNSIGNED NOT NULL UNIQUE';
		$description = Schema::TYPE_TEXT;
		$auditTime = Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL DEFAULT 0';
		$auditUser = Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0';

		$this->createTable('{{%role}}', [
			'id' => $id, 'name' => $name, 'value' => $value,
			'description' => $description,
			'created_at' => $auditTime, 'created_by' => $auditUser,
			'updated_at' => $auditTime, 'updated_by' => $auditUser,
		], $this->tableOptions);

		$this->insert('{{%role}}', ['name'=> 'User', 'value' => 10]);
		$this->insert('{{%role}}', ['name'=> 'Admin', 'value' => 20]);

		$this->createTable('{{%status}}', [
			'id' => $id, 'name' => $name, 'value' => $value,
			'description' => $description,
			'created_at' => $auditTime, 'created_by' => $auditUser,
			'updated_at' => $auditTime, 'updated_by' => $auditUser,
		], $this->tableOptions);

		$this->insert('{{%status}}', ['name'=> 'Pending', 'value' => 5]);
		$this->insert('{{%status}}', ['name'=> 'Active', 'value' => 10]);

		$this->createTable('{{%user_type}}', [
			'id' => $id, 'name' => $name, 'value' => $value,
			'description' => $description,
			'created_at' => $auditTime, 'created_by' => $auditUser,
			'updated_at' => $auditTime, 'updated_by' => $auditUser,
		], $this->tableOptions);

		$this->insert('{{%user_type}}', ['name'=> 'Free', 'value' => 10]);
		$this->insert('{{%user_type}}', ['name'=> 'Paid', 'value' => 30]);
	}

	public function down()
	{
		$this->dropTable('{{%user_type}}');
		$this->dropTable('{{%status}}');
		$this->dropTable('{{%role}}');
	}
}

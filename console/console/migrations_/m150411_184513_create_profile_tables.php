<?php
use yii\db\Schema;
use yii\db\Migration;

class m150411_184513_create_profile_tables extends Migration
{
	protected $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

	public function up()
	{
		$id = Schema::TYPE_PK;
		$auditTime = Schema::TYPE_INTEGER . ' UNSIGNED NOT NULL DEFAULT 0';
		$auditUser = Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0';

		$this->createTable('{{%gender}}', [
			'id' => $id,
			'name' => Schema::TYPE_STRING . '(64) NOT NULL',
		], $this->tableOptions);

		$this->insert('{{%gender}}', ['name'=> 'Female']);
		$this->insert('{{%gender}}', ['name'=> 'Male']);
		$this->insert('{{%gender}}', ['name'=> 'Other']);

		$this->createTable('{{%profile}}', [
			'id' => $id,
			'user_id' => Schema::TYPE_INTEGER . ' NOT NULL UNIQUE',
			'first_name' => Schema::TYPE_STRING . '(64) NOT NULL',
			'last_name' => Schema::TYPE_STRING . '(64) NOT NULL',
			'birthdate' => 'DATE NOT NULL',
			'gender_id' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0',
			'about' => Schema::TYPE_TEXT,
			'created_at' => $auditTime, 'created_by' => $auditUser,
			'updated_at' => $auditTime, 'updated_by' => $auditUser,
		], $this->tableOptions);

		$this->addForeignKey('profile_user', '{{%profile}}', 'user_id', '{{%user}}', 'id');
		$this->addForeignKey('profile_gender', '{{%profile}}', 'gender_id', '{{%gender}}', 'id');
	}

	public function down()
	{
		$this->dropForeignKey('profile_gender', '{{%profile}}');
		$this->dropForeignKey('profile_user', '{{%profile}}');

		$this->dropTable('{{%profile}}');
		$this->dropTable('{{%gender}}');
	}
}

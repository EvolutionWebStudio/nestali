<?php

class m140520_142535_add_deleted_in_profile_table extends CDbMigration
{
	public function up()
	{
		$this->addColumn('profile', 'is_deleted', 'tinyint(1) AFTER city_ptt');
	}

	public function down()
	{
		$this->dropColumn('profile', 'is_deleted');
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
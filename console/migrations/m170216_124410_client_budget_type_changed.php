<?php

use yii\db\Migration;

class m170216_124410_client_budget_type_changed extends Migration
{
    public function up()
    {
		$this->execute("ALTER TABLE `blog_client` CHANGE `est_budget` `est_budget` VARCHAR(255) NOT NULL;");
    }

    public function down()
    {
        echo "m170216_124410_client_budget_type_changed cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

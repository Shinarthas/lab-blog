<?php

use yii\db\Migration;

class m161207_150535_add_status_to_table_client_email extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE  `blog_client_email` ADD  `status` INT NOT NULL DEFAULT  \'0\' AFTER  `client_data` ;');
    }

    public function down()
    {
        echo "m161207_150535_add_status_to_table_client_email cannot be reverted.\n";

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

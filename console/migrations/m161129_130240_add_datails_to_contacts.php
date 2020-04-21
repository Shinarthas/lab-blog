<?php

use yii\db\Migration;

class m161129_130240_add_datails_to_contacts extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE `blog_contacts` ADD `details` VARCHAR(255) NOT NULL AFTER `email`;');
    }

    public function down()
    {
        echo "m161129_130240_add_datails_to_contacts cannot be reverted.\n";

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

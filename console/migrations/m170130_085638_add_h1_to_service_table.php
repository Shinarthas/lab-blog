<?php

use yii\db\Migration;

class m170130_085638_add_h1_to_service_table extends Migration
{
    public function up()
    {
        $this->execute('ALTER TABLE `blog_services` ADD `h1` VARCHAR(255) NOT NULL AFTER `category_id`;');
    }

    public function down()
    {
        echo "m170130_085638_add_h1_to_service_table cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170203_104749_post_table_add_h1 extends Migration
{
    public function up()
    {
        $this->execute('
          ALTER TABLE `blog_post` ADD `h1` VARCHAR(255) NOT NULL AFTER `title`;
          ALTER TABLE `blog_post_translations` ADD `h1` VARCHAR(255) NOT NULL AFTER `id_lang`;
        ');
    }

    public function down()
    {
        echo "m170203_104749_post_table_add_h1 cannot be reverted.\n";

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

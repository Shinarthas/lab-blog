<?php

use yii\db\Migration;

class m170207_145637_post_category_banner extends Migration
{
    public function up()
    {
        $this->execute('
        CREATE TABLE IF NOT EXISTS `blog_post_category_banner` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `id_post` int(11) NOT NULL,
          `id_category` int(11) NOT NULL,
          `date_create` int(11) NOT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
        ');
    }

    public function down()
    {
        echo "m170207_145637_post_category_banner cannot be reverted.\n";

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

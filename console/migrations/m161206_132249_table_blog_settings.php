<?php

use yii\db\Migration;

class m161206_132249_table_blog_settings extends Migration
{
    public function up()
    {
        $this->execute('
        CREATE TABLE IF NOT EXISTS `blog_settings` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `date_create` int(11) NOT NULL,
          `date_update` int(11) NOT NULL,
          `name` varchar(500) NOT NULL,
          `data` text NOT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
        ');
    }

    public function down()
    {
        echo "m161206_132249_table_blog_settings cannot be reverted.\n";

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

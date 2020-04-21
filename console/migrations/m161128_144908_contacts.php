<?php

use yii\db\Migration;

class m161128_144908_contacts extends Migration
{
    public function up()
    {
        $this->execute('
        
        CREATE TABLE IF NOT EXISTS `blog_contacts` (
          `id` int(11) NOT NULL,
          `username` varchar(255) NOT NULL,
          `email` varchar(255) NOT NULL,
          `budget` varchar(255) NOT NULL,
          `date_create` int(11) NOT NULL,
          `status` int(11) NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    
        ALTER TABLE `blog_contacts`
          ADD PRIMARY KEY (`id`);
        
        ALTER TABLE `blog_contacts`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
    }

    public function down()
    {
        echo "m161128_144908_contacts cannot be reverted.\n";

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

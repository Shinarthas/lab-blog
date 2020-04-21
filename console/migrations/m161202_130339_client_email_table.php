<?php

use yii\db\Migration;

class m161202_130339_client_email_table extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE IF NOT EXISTS `blog_client_email` (
  `id` int(11) NOT NULL,
  `client_email` varchar(500) NOT NULL,
  `client_ip` varchar(500) NOT NULL,
  `client_data` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `blog_client_email`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `blog_client_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
    }

    public function down()
    {
        echo "m161202_130339_client_email_table cannot be reverted.\n";

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

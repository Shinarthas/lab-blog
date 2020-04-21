<?php

use yii\db\Migration;

class m161206_130528_user_form_statistic_table extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE IF NOT EXISTS `blog_user_form_statistic` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `date_create` int(11) NOT NULL,
          `stat_date` text NOT NULL,
          `status` int(11) NOT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;');
    }

    public function down()
    {
        echo "m161206_130528_user_form_statistic_table cannot be reverted.\n";

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

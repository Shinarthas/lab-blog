<?php

use yii\db\Migration;

class m170309_115444_blog_redirects extends Migration
{
    public function up()
    {
        $this->execute('CREATE TABLE IF NOT EXISTS `blog_post_redirects` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `url_from` varchar(500) NOT NULL,
          `url_too` varchar(500) NOT NULL,
          `code` int(11) NOT NULL,
          `date_create` int(11) NOT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
        ');
    }

    public function down()
    {
        echo "m170309_115444_blog_redirects cannot be reverted.\n";

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

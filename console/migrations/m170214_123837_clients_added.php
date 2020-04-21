<?php

use yii\db\Migration;

class m170214_123837_clients_added extends Migration
{
    public function up()
    {
		$this->execute("
CREATE TABLE `blog_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `from_where` int(11) NOT NULL,
  `account_to_contact` varchar(255) NOT NULL,
  `link_to_contact` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `est_budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `blog_client`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `blog_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  ");
    }

    public function down()
    {
        echo "m170214_123837_clients_added cannot be reverted.\n";

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

<?php

use yii\db\Migration;

class m170714_125846_blog_changes extends Migration
{
    public function up()
    {
		$this->execute("
		ALTER TABLE `blog_post` ADD `status_second` INT NOT NULL AFTER `background_path`, ADD `link_images` VARCHAR(255) NOT NULL AFTER `status_second`, ADD `link_additional` VARCHAR(255) NOT NULL AFTER `link_images`, ADD `link_guest_blog` VARCHAR(255) NOT NULL AFTER `link_additional`, ADD `comment` TEXT NOT NULL AFTER `link_guest_blog`, ADD `unique_percent` INT NOT NULL AFTER `comment`, ADD `smm_1` INT NOT NULL AFTER `unique_percent`, ADD `smm_2` INT NOT NULL AFTER `smm_1`, ADD `smm_3` INT NOT NULL AFTER `smm_2`, ADD `smm_4` INT NOT NULL AFTER `smm_3`;
ALTER TABLE `blog_post` ADD `hashtag` VARCHAR(255) NOT NULL AFTER `smm_4`;
		");
    }

    public function down()
    {
        echo "m170714_125846_blog_changes cannot be reverted.\n";

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

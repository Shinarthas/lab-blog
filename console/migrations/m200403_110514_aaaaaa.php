<?php

use yii\db\Migration;

class m200403_110514_aaaaaa extends Migration
{
    public function up()
    {
        $this->execute('
ALTER TABLE `blog_post_translations` 
ADD COLUMN `background` VARCHAR(100) NULL AFTER `date_update`,
ADD COLUMN `background_path` VARCHAR(250) NULL AFTER `background`;
');
    }

    public function down()
    {
        echo "m200403_110514_lang_for_service_category cannot be reverted.\n";

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

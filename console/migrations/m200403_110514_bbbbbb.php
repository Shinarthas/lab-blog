<?php

use yii\db\Migration;

class m200403_110514_bbbbbb extends Migration
{
    public function up()
    {
        $this->execute('
ALTER TABLE `lab3m`.`blog_services_category_translations` 
ADD COLUMN `content` MEDIUMTEXT NULL AFTER `description`;

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

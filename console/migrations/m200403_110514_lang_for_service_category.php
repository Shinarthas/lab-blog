<?php

use yii\db\Migration;

class m200403_110514_lang_for_service_category extends Migration
{
    public function up()
    {
        $this->addColumn('blog_services_category','image',$this->string());
        $this->execute('CREATE TABLE `blog_services_category_translations` (
  `id` INT NOT NULL,
  `id_lang` VARCHAR(45) NULL,
  `id_service_category` INT NULL,
  `title` VARCHAR(255) NULL,
  `description` MEDIUMTEXT NULL,
  PRIMARY KEY (`id`))');
        $this->execute('ALTER TABLE `blog_services_category_translations` 
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;');
        /*ALTER TABLE `lab3m`.`blog_services_category_translations`
CHANGE COLUMN `id` `id` INT(11) NOT NULL AUTO_INCREMENT ;*/

        $this->execute("ALTER TABLE blog_services_category_translations CHANGE title title VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE description description MEDIUMTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;");
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

<?php

use yii\db\Migration;

class m200423_093344_service_update extends Migration
{
    public function up()
    {
        $this->addColumn('blog_services_translations','meta_title',$this->string());
        $this->addColumn('blog_services_translations','meta_image',$this->string());
    }

    public function down()
    {
        echo "m200423_093344_service_update cannot be reverted.\n";

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

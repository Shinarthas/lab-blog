<?php

use yii\db\Migration;

class m200402_115507_service_lang_image extends Migration
{
    public function up()
    {
        $this->addColumn('blog_services','image',$this->string());

        $this->alterColumn('blog_services_translations','id_lang',$this->string());
    }

    public function down()
    {
        echo "m200402_115507_service_lang_image cannot be reverted.\n";

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

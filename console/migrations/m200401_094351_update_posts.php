<?php

use yii\db\Migration;

class m200401_094351_update_posts extends Migration
{
    public function up()
    {
        $this->addColumn('blog_post','video',$this->string());
        $this->addColumn('blog_post','related_to',$this->string());
        $this->addColumn('blog_post','language',$this->string());
    }

    public function down()
    {
        echo "m200401_094351_update_posts cannot be reverted.\n";

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

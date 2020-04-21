<?php

use yii\db\Migration;

class m200410_121924_meta_tag_table extends Migration
{
    public function up()
    {
        $this->createTable('meta_tag',[
            'id'=>$this->primaryKey(),
            'img'=>$this->string(),
            'title'=>$this->string(),
            'description'=>$this->string(),
            'url'=>$this->string(),
        ]);
    }

    public function down()
    {
        echo "m200410_121924_meta_tag_table cannot be reverted.\n";

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

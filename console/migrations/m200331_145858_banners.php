<?php

use yii\db\Migration;

class m200331_145858_banners extends Migration
{
    public function up()
    {
        $this->createTable('banners',[
            'id'=>$this->primaryKey(),
            'img'=>$this->string(),
            'title'=>$this->string(),
            'text'=>$this->string(),
            'url'=>$this->string(),
            'lang'=>$this->string(),
        ]);
    }

    public function down()
    {
        echo "m200331_145858_banners cannot be reverted.\n";

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

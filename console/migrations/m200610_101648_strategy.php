<?php

use yii\db\Migration;

/**
 * Class m200610_101648_strategy
 */
class m200610_101648_strategy extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {

        //ALTER TABLE `blog_post` CHANGE `content` `content` LONGTEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL;
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand("ALTER TABLE `blog_post` CHANGE `content` `content` LONGTEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL;");

        $result = $command->execute();
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand("ALTER TABLE `blog_post_translations` CHANGE `content` `content` LONGTEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL;");

        $result = $command->execute();
        $this->createTable('strategy',[
            'id'=>$this->primaryKey(),
            'name'=>$this->string(),
            'profit'=>$this->float(),
            'balance'=>$this->float(),
            'accounts'=>$this->integer(),
            'data'=>'json',
            'created_at'=>$this->dateTime()
        ]);

    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m200610_101648_strategy cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200610_101648_strategy cannot be reverted.\n";

        return false;
    }
    */
}

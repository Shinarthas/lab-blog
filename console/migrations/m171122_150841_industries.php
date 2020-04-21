<?php

use yii\db\Migration;
use common\models\PostCategory;

class m171122_150841_industries extends Migration
{
    public function up()
    {
		$new_category = new PostCategory;
		$new_category->id = 20;
		$new_category->name = "Industries";
		$new_category->save();
		
		return true;
    }

    public function down()
    {
        echo "m171122_150841_industries cannot be reverted.\n";

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

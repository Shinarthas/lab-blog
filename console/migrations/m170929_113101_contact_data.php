<?php

use yii\db\Migration;

class m170929_113101_contact_data extends Migration
{
    public function up()
    {
		$this->addColumn('blog_contacts', 'data_json', $this->text()->notNull());
    }

    public function down()
    {
        echo "m170929_113101_contact_data cannot be reverted.\n";

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

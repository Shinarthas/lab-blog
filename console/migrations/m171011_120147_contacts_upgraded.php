<?php

use yii\db\Migration;

class m171011_120147_contacts_upgraded extends Migration
{
    public function up()
    {
		$this->addColumn('blog_contacts', 'reply', $this->text()->notNull().' AFTER details');
		
		$this->createTable('{{%contact_movement}}', [
            'id' => $this->primaryKey(),
			'contact_id' => $this->integer()->notNull(),
			'url' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
		
		$this->createTable('{{%contact_history}}', [
            'id' => $this->primaryKey(),
			'contact_id' => $this->integer()->notNull(),
			'status' => $this->integer()->notNull(),
			'data_json' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m171011_120147_contacts_upgraded cannot be reverted.\n";

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

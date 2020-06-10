<?php

use yii\db\Migration;

/**
 * Class m200610_125124_account_balances
 */
class m200610_125124_account_balances extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand("DROP TABLE IF EXISTS `account_balance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `account_balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(255) DEFAULT NULL,
  `balances` json DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` float DEFAULT NULL,
  `balances_margin` json DEFAULT NULL,
  `total_margin` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;");

        $result = $command->execute();
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m200610_125124_account_balances cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200610_125124_account_balances cannot be reverted.\n";

        return false;
    }
    */
}

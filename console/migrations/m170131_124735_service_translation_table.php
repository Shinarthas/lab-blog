<?php

use yii\db\Migration;

class m170131_124735_service_translation_table extends Migration
{
    public function up()
    {
        $this->execute('
CREATE TABLE IF NOT EXISTS `blog_services_translations` (
  `id` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `h1` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `meta_desc` varchar(500) NOT NULL,
  `date_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_services_translations`
--
ALTER TABLE `blog_services_translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_services_translations`
--
ALTER TABLE `blog_services_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
    }

    public function down()
    {
        echo "m170131_124735_service_translation_table cannot be reverted.\n";

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

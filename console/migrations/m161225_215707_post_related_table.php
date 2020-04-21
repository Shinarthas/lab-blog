<?php

use yii\db\Migration;

class m161225_215707_post_related_table extends Migration
{
    public function up()
    {
        $this->execute('
--
-- Структура таблицы `blog_post_related`
--

CREATE TABLE IF NOT EXISTS `blog_post_related` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_post_related` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_post_related`
--
ALTER TABLE `blog_post_related`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_post_related`
--
ALTER TABLE `blog_post_related`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;');
    }

    public function down()
    {
        echo "m161225_215707_post_related_table cannot be reverted.\n";

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

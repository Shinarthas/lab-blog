<?php

use yii\db\Migration;

class m170127_112410_table_service_and_service_category extends Migration
{
    public function up()
    {
        $this->execute('
        
CREATE TABLE IF NOT EXISTS `blog_services` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `meta_desc` text NOT NULL,
  `seo_url` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL,
  `date_published` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_services`
--
ALTER TABLE `blog_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_services`
--
ALTER TABLE `blog_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
  CREATE TABLE IF NOT EXISTS `blog_services_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_services_category`
--
ALTER TABLE `blog_services_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_services_category`
--
ALTER TABLE `blog_services_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
        ');
    }

    public function down()
    {
        echo "m170127_112410_table_service_and_service_category cannot be reverted.\n";

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

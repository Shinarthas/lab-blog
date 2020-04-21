<?php

use yii\db\Migration;

class m161223_182323_blog_post_category extends Migration
{
    public function up()
    {
        $this->execute("--
           
        --
        -- Структура таблицы `blog_post_category`
        --
        
        CREATE TABLE IF NOT EXISTS `blog_post_category` (
          `id` int(11) NOT NULL,
          `name` varchar(500) NOT NULL,
          `date_create` int(11) NOT NULL,
          `date_update` int(11) NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
        
        --
        -- Дамп данных таблицы `blog_post_category`
        --
        
        INSERT INTO `blog_post_category` (`id`, `name`, `date_create`, `date_update`) VALUES
        (1, 'Design', 1482588995, 1482588995),
        (2, 'Entrepreneurship', 1482588995, 1482588995),
        (3, 'Marketing', 1482588995, 1482588995),
        (4, 'Social', 1482588995, 1482588995),
        (5, 'Media', 1482588995, 1482588995),
        (6, 'Startup', 1482588995, 1482588995);
        
        --
        -- Индексы сохранённых таблиц
        --
        
        --
        -- Индексы таблицы `blog_post_category`
        --
        ALTER TABLE `blog_post_category`
          ADD PRIMARY KEY (`id`);
        
        --
        -- AUTO_INCREMENT для сохранённых таблиц
        --
        
        --
        -- AUTO_INCREMENT для таблицы `blog_post_category`
        --
        ALTER TABLE `blog_post_category`
          MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;           
                          
            --
            -- Структура таблицы `blog_post_to_category`
            --
            
            CREATE TABLE IF NOT EXISTS `blog_post_to_category` (
              `id` int(11) NOT NULL,
              `id_post` int(11) NOT NULL,
              `id_category` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
            
            --
            -- Индексы сохранённых таблиц
            --
            
            --
            -- Индексы таблицы `blog_post_to_category`
            --
            ALTER TABLE `blog_post_to_category`
              ADD PRIMARY KEY (`id`);
            
            --
            -- AUTO_INCREMENT для сохранённых таблиц
            --
            
            --
            -- AUTO_INCREMENT для таблицы `blog_post_to_category`
            --
            ALTER TABLE `blog_post_to_category`
              MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
              
              
              
              
              ");


    }

    public function down()
    {
        echo "m161223_182323_blog_post_category cannot be reverted.\n";

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

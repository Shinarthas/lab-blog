<?php

use yii\db\Migration;

class m161117_151926_init_blog_migration extends Migration
{
    public function up()
    {
        $this->execute('
            
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `thunderrise_db`
--


--
-- Структура таблицы `blog_img`
--

CREATE TABLE IF NOT EXISTS `blog_img` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `img_width` int(11) NOT NULL,
  `img_height` int(11) NOT NULL,
  `dir` varchar(250) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;



--
-- Структура таблицы `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `content_preview` text COLLATE utf8_bin NOT NULL,
  `meta_desc` text COLLATE utf8_bin NOT NULL,
  `seo_url` varchar(100) COLLATE utf8_bin NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL,
  `date_published` int(11) NOT NULL,
  `background` varchar(100) COLLATE utf8_bin NOT NULL,
  `background_path` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `blog_post`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog_user`
--

CREATE TABLE IF NOT EXISTS `blog_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_bin NOT NULL,
  `password_hash` varchar(500) COLLATE utf8_bin NOT NULL,
  `password_reset_token` varchar(250) COLLATE utf8_bin NOT NULL,
  `auth_key` varchar(250) COLLATE utf8_bin NOT NULL,
  `name` varchar(63) COLLATE utf8_bin NOT NULL,
  `position` varchar(63) COLLATE utf8_bin NOT NULL,
  `photo` varchar(63) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `blog_user`
--

INSERT INTO `blog_user` (`id`, `username`, `password_hash`, `password_reset_token`, `auth_key`, `name`, `position`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, \'admin\', \'$2y$13$2WaMHhEFXU5jMFZUZFAXf.8pebDoqVWBlnhXx/mefQQeMz/0gK0su\', \'\', \'\', \'Team\', \'ThunderRise\', \'team.png\', 10, 0, 1479389662),
(2, \'editor\', \'$2y$13$xxvm3jWWGmHYcR5Egm0kt.YJrMOZv31UluT454GaxVhJKk9PXyFAa\', \'\', \'\', \'Team\', \'ThunderRise\', \'user.png\', 10, 0, 1479389734);

--
-- Индексы сохранённых таблиц
--


--
-- Индексы таблицы `blog_img`
--
ALTER TABLE `blog_img`
  ADD PRIMARY KEY (`id`);


--
-- Индексы таблицы `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `seo_url` (`seo_url`),
  ADD KEY `seo_url_2` (`seo_url`),
  ADD KEY `seo_url_3` (`seo_url`);

--
-- Индексы таблицы `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
  
  ALTER TABLE `blog_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
--
-- AUTO_INCREMENT для таблицы `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
  
  ALTER TABLE `blog_post` CHANGE `background` `background` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL;
        
        ');
    }

    public function down()
    {
        echo "m161117_151926_init_blog_migration cannot be reverted.\n";

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

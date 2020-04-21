<?php

use yii\db\Migration;

class m161213_151320_lang_and_post_translation_table_and_insert extends Migration
{
    public function up()
    {
        $this->execute('
CREATE TABLE IF NOT EXISTS `blog_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `hreflang` varchar(50) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_default` smallint(6) NOT NULL DEFAULT \'0\',
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `blog_lang`
--
INSERT INTO `blog_lang` (`id`, `url`, `hreflang`, `local`, `name`, `lang_default`, `date_update`, `date_create`) VALUES
(1, \'en\', \'en-US\', \'en_EN\', \'English\', 1, 1481626723, 1481626723),
(2, \'de\', \'de-DE\', \'de_DE\', \'German\', 0, 1481626723, 1481626723),
(4, \'it\', \'it-IT\', \'it_IT\', \'Italian\', 0, 1481626723, 1481626723);
        
        
CREATE TABLE IF NOT EXISTS `blog_post_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_desc` text NOT NULL,
  `content` text NOT NULL,
  `content_preview` text NOT NULL,
  `date_create` int(11) NOT NULL,
  `date_update` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
        
        ');
    }

    public function down()
    {
        echo "m161213_151320_lang_and_post_translation_table_and_insert cannot be reverted.\n";

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

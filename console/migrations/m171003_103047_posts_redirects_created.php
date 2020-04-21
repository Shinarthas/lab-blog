<?php

use yii\db\Migration;
use common\models\Post;
use common\models\PostRedirects;

class m171003_103047_posts_redirects_created extends Migration
{
    public function up()
    {
		foreach(Post::find()->where("id<70")->all() as $post)
		{
			if($post->seo_url != 'how-to-develop-a-shopping-app-like-wish' AND  $post->seo_url != '7-paypal-alternatives')
			{
				$redirect = new PostRedirects();
				$redirect->url_from = '/blog/'.$post->seo_url;
				$redirect->url_too = '/'.$post->seo_url;
				$redirect->code = 302;
				$redirect->save();
			}
		}
    }

    public function down()
    {
        echo "m171003_103047_posts_redirects_created cannot be reverted.\n";

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

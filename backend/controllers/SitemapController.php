<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20.12.2016
 * Time: 14:18
 */

namespace backend\controllers;


use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;
use common\models\Post;
use common\models\ServicesCategory;

class SitemapController extends Controller
{

    public function behaviors() {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['updateNews']
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $site_map_file =  Yii::getAlias('@frontend').'/web/sitemap.xml';
        $xml= simplexml_load_file($site_map_file);
        $count = count($xml->url);
        $data=[
            'count'=>$count,
            'date'=>filemtime($site_map_file),
        ];


        return $this->render('index',['data'=>$data,'xml'=>$xml]);
    }

    public function actionSaveSiteMap()
    {

        $body = '';
        $header = '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';

        $services = '';
        foreach(ServicesCategory::find()->with(['services'])->all() as $category)
        {   $url = 'https://lab3m.com/'.$category->url;
                    $url_ru='https://lab3m.com/'.$category->url;
                    $url_en='https://lab3m.com/en/'.$category->url;
                    $priority = "0.60";
			
			$services.= '<url>
						<loc>'.$url.'</loc>
						<changefreq>daily</changefreq>
						<priority>'.$priority.'</priority>
                        <link 
                         rel="alternate"
                         hreflang="en"
                         href="'.$url_en.'"
                         />
                        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="'.$url_ru.'"
                         />
					</url>';
            foreach($category->services as $service)
            {
                //if($service->status == 0)
                 //   continue;
                if($service->seo_url != '')
                {
                    $url = 'https://lab3m.com/'.$category->url.'/'.$service->seo_url;
                    $url_ru='https://lab3m.com/'.$category->url.'/'.$service->seo_url;
                    $url_en='https://lab3m.com/en/'.$category->url.'/'.$service->seo_url;
                    $priority = "0.60";
                }
                else
                {
                    $url = 'https://lab3m.com/'.$category->url;
                    $priority = "0.51";
                }

                $services.= '<url>
						<loc>'.$url.'</loc>
						<changefreq>daily</changefreq>
						<priority>'.$priority.'</priority>
                        <link 
                         rel="alternate"
                         hreflang="en"
                         href="'.$url_en.'"
                         />
                        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="'.$url_ru.'"
                         />
					</url>';
            }
        }

        $main_pages = '   <url>
        <loc>https://lab3m.com/</loc>
        <changefreq>daily</changefreq>
        <priority>1.00</priority>
        <link 
                         rel="alternate"
                         hreflang="en"
                         href="https://lab3m.com/en/"
                         />
        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="https://lab3m.com/"
                         />
    </url>
    <url>
        <loc>https://lab3m.com/about</loc>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
                <link 
                         rel="alternate"
                         hreflang="en"
                         href="https://lab3m.com/en/about"
                         />
        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="https://lab3m.com//about"
                         />
    </url>
    <url>
        <loc>https://lab3m.com/contacts</loc>
        <changefreq>daily</changefreq>
        <priority>0.40</priority>
        <link 
                         rel="alternate"
                         hreflang="en"
                         href="https://lab3m.com/en/contacts"
                         />
        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="https://lab3m.com//contacts"
                         />
    </url>
    <url>
        <loc>https://lab3m.com/solutions/trade3m</loc>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
                <link 
                         rel="alternate"
                         hreflang="en"
                         href="https://lab3m.com/en/solutions/trade3m"
                         />
        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="https://lab3m.com//solutions/trade3m"
                         />
    </url>
    <url>
        <loc>https://lab3m.com/blog</loc>
        <changefreq>daily</changefreq>
        <priority>0.80</priority>
        <link 
                         rel="alternate"
                         hreflang="en"
                         href="https://lab3m.com/en/blog"
                         />
        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="https://lab3m.com//blog"
                         />
    </url>';

        $footer = '</urlset>';

        $models = Post::find()
            ->select([Post::tableName().'.seo_url'])
            ->where(['status'=>Post::POST_ACTIVE])
            ->andWhere(Post::tableName().'.date_published < '.time())
            ->orderBy([Post::tableName().'.date_published'=>SORT_ASC])
            ->all();
        $count  = count($models);
        $i=1;

        $body.=$header;
        $body.=$main_pages;

        foreach ($models as $model){
            $url_ru='https://lab3m.com//'.$model->seo_url;
            $url_en='https://lab3m.com/en/'.$model->seo_url;
            $temp='
    <url>
        <loc>https://lab3m.com/'.$model->seo_url.'</loc>
        <changefreq>daily</changefreq>
        <priority>'.(($i/$count<0.5) ? '0.5' : number_format(round($i/$count,1),2,'.','')).'</priority>
         <link 
                         rel="alternate"
                         hreflang="en"
                         href="'.$url_en.'"
                         />
        <link 
                         rel="alternate"
                         hreflang="ru"
                         href="'.$url_ru.'"
                         />
    </url>';
            $body.=$temp;
            $i++;
        }

        $body.=$services;
        $body.=$footer;

        $site_map_file =  Yii::getAlias('@frontend').'/web/sitemap.xml';

        file_put_contents($site_map_file,$body);

        $this->redirect('/sitemap/index');

    }
}
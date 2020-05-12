<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 26.01.2017
 * Time: 15:28
 */

use common\models\Lang;
use yii\helpers\Url;

$this->title = ucfirst($model['meta_title']);


$this->registerCssFile("/styles/services-inner.css");
$this->registerCssFile("/styles/estimate.css");
$this->registerJsFile("/scripts/jquery-1.12.4.min.js");
$this->registerJsFile("/scripts/services_bar.js");
$this->registerMetaTag(['name' => 'description', 'content' => $model['meta_desc']]);
$this->registerMetaTag(['name' => 'title', 'content' => $model['meta_title']]);
$this->registerMetaTag(['name' => 'image', 'content' => $model['image']]);
$this->registerMetaTag(['name' => 'og:image', 'content' => Yii::getAlias('@front').'/images/temp/'.$model['meta_image']]);

$lang_list = Lang::getLangList();

    foreach ($lang_list as $lang_item)
    {
        foreach ($trans_list as $trans){
            /*if($trans['id_lang'] == $lang_item['id'] && $lang->id !=$lang_item['id'] && $lang_item['lang_default']!=1)
            {
                $this->registerLinkTag([
                    'rel' => 'alternate',
                    'href' =>  '/'.$lang_item['url'].'/services/'.(!empty($model['url']) ? $model['url'] : strip_tags($_GET['category'])).(!empty($model['seo_url']) ? '/'.$model['seo_url'] : ''),
                    'hreflang'=>$lang_item['hreflang']
                ]);
               // <link rel="alternate" hreflang="es" href="http://es.example.com/" />
            }*/
        }
    }


$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_services'),
    'url'=>\yii\helpers\Url::toRoute('/services')
);

$service_category=\common\models\ServicesCategory::findOne($model['category_id']);
$service_category_translation=\common\models\ServicesCategoryTranslations::find()->where(['id_service_category'=>$service_category->id,'id_lang'=>Yii::$app->language])->asArray()->one();
$this->params['breadcrumbs'][] = array(
    'label'=> $service_category_translation['title'],
    'url'=>Url::to(['blog/show-post','id'=>$service_category['url'],'language'=>Yii::$app->language])
);
$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app',$model['title']),
    'url'=>Url::to(['blog/show-post','id'=>$model['url'],'language'=>Yii::$app->language])
);

?>

<div class="services-inner" style="background: #151515;">
    <div class="container">
        <div class="row">
            <button class="btn-bar">Category</button>
            <h1><?=$h1?></h1>
        </div>
    </div>
    
    <div class="container" style="border-bottom: 1px dotted white; padding-bottom: 20px;">
        <div class="row">
            <div class="content">
               <?=preg_replace('|<\/div>$|isU','',trim($model['content']));?>
               <?php echo  $this->render('//layouts/_estimate'); ?>
            </div>
            <?= $this->render('//layouts/_servicesBar',['menu'=>$menu,'lang'=>$lang]) ?>
        </div>
    </div>

<?php echo  $this->render('//layouts/_blog_random'); ?>
    <script>var scr = {"scripts":[
            {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
            {"src" : "/scripts/bootstrap.min.js", "async" : false},
            {"src" : "/scripts/case.js", "async" : false},
            {"src" : "/scripts/app.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>

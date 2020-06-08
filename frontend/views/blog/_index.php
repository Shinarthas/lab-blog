<?
use yii\helpers\Url;
use common\models\Img;

?>
            <?php foreach ($models as $model) { ?>
                <div itemscope itemtype="http://schema.org/NewsArticle" class="articles">
                    <div class="one-article">
                        <div class="left-part">
                            <a href="<?=Url::to(['blog/show-post','id'=>$model->seo_url,'language'=>Yii::$app->language])?>">
                            <?php
                            $img_path=$model->background_path;
                            $img_back=$model->background;
                            if(isset($model->background2)){
                                $img_path=$model->background_path2;
                                $img_back=$model->background2;
                            }
                            ?>
                                <img src="<?=Url::home(true) . Yii::$app->ImageComponent->getCacheImage($img_back,$img_path,Img::IMG_CACHE_BLOG_PREV_WIDTH,Img::IMG_CACHE_BLOG_PREV_HEIGHT,true);?>" alt="<?=isset($model->translate)? $model->translate->title : $model->title?>">
                            </a>
                        </div>
                        <div class="right-part">
                            <div class="info" style="width: 100%;">
                                <div class="date"><?=date('M d, Y',$model->date_create)?></div>
                                <div class="read"><?= intval(strlen($model->content)/600/6 )+1 ?> <?=Yii::t('static','min')?></div>
                            </div>
                            <div class="name">
                                <a href="<?=Url::to(['blog/show-post','id'=>$model->seo_url,'language'=>Yii::$app->language])?>">
                                <?=$model->title?>
                                </a>
                            </div>
                            <div class="desc" itemprop="articleBody">
                                <?=$model->content_preview?>
                            </div>
                            <div class="go-to-article">
                                <a href="<?=Url::to(['blog/show-post','id'=>$model->seo_url,'language'=>Yii::$app->language])?>"><?= Yii::t('app', 'read') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            
            <!-- <div class="col-md-4 col-sm-6 post">
                <a target="_blank" href="https://medium.com/lab3m">
                <?= Yii::t('app', 'banner_medium') ?>
                </a>
            </div> -->
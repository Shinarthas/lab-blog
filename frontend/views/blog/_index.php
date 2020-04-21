<?
use yii\helpers\Url;
use common\models\Img;
?>
			<?php foreach ($models as $model) { ?>
                <div itemscope itemtype="http://schema.org/NewsArticle" class="col-md-4 col-sm-6 post">
                    <div style="margin: 15px;border: 1px solid #fff; overflow: hidden;">
                    <a href="/<?=$model->seo_url?>" class="post-img">
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
                    <!--<p class="title">���</p>-->
                    <h2 style="line-height: 0; text-align: left;padding: 0 15px;margin: 10px 0; min-height: 60px;"><a style="font-size: 18px;line-height: 1.5em;" href="<?=isset($_GET['language']) ? '/'.$lang->url : ''; ?>/<?=$model->seo_url?>" class="bot-link"><?=$model->title?></a></h2>
                    <!-- <p class="small-content" itemprop="articleBody">
                    <?=$model->content_preview?>
                    </p> -->
                    <div class="row" style="margin:0; padding: 5px 0; border-top: 1px solid #fff;">
                        <div class="col-6" style="text-align: left;">#news</div>
                        <div class="col-6" style="text-align: right;">02.04.2020</div>
                    </div>
                    </div>
                </div>
            <?php } ?>
            
            <div class="col-md-4 col-sm-6 post">
                <a target="_blank" href="https://medium.com/lab3m">
                <?= Yii::t('app', 'banner_medium') ?>
                </a>
            </div>
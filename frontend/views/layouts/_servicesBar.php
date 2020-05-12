<?php
$anchor=$_GET['service_category'];
if(isset($_GET['id']))
    $anchor=$_GET['id'];
//возьмем все сервис категории
$menus=\common\models\ServicesCategory::find()
    ->select('blog_services_category.id,blog_services_category.image,blog_services_category.url,
    blog_services_category_translations.id_lang,blog_services_category_translations.title,blog_services_category_translations.description')
    ->joinWith('translations')
    ->where(['id_lang'=>Yii::$app->language])
    ->asArray()
    //->createCommand()
    //->rawSql;
    ->all();

$services=\common\models\Services::find()
    ->select('blog_services.id,blog_services.category_id,seo_url,blog_services_translations.h1,blog_services_translations.name')
    ->joinWith('translations')
    ->where(['id_lang'=>Yii::$app->language])
    ->asArray()
    //->createCommand()
    //->rawSql;
    ->all();

$services_remap=[];
foreach ($services as $service){
    $services_remap[$service['category_id']][]=$service;
}

?>
<!-- <div class="col-12 dis-mini34" style="text-align: center;    margin-top: 20px;">
<div onclick="OpenMenu()" class="button-sic__item" style="background-color: #6927ff!important;">
        <div class="button-sic__link"><?= Yii::t('app', 'but_categor') ?></div>
    </div></div> -->
<div id="dropdownone" class="panel-group hidden-xs hidden-sm red-fin99" id="accordion" role="tablist" aria-multiselectable="true">
    <?php foreach ($menus as $id=>$item){ ?>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="heading_<?=$id?>">
            <h4 class="panel-title">
                <span role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$id?>" aria-expanded="<?=($item['url']==$anchor) ? 'true' : 'false' ?>" aria-controls="collapse_<?=$id?>"></span>
                <a style="width: 100%;" href="<?=\yii\helpers\Url::to(['blog/show-post','id'=>$item['url'],'language'=>Yii::$app->language])?>"><?=$item['title']?></a>
            </h4>
        </div>
        <div id="collapse_<?=$id?>" class="panel-collapse collapse <?=($item['url']==$anchor) ? 'in':'';?>" role="tabpanel" aria-labelledby="heading_<?=$id?>">
            <div class="panel-body">
                <ul class="group-item">
                    <?php foreach ($services_remap[$item['id']] as $sub_category) { ?>
                        <?php if(!empty($sub_category['seo_url'])) {?>
                    <li class="col-item <?=( isset($_GET['category']) && $sub_category['seo_url'] == $_GET['category'] ) ? 'active': '';?>"><a style="width: 100%;" href="<?=\yii\helpers\Url::to(['blog/show-post','id'=>$item['url'],'language'=>Yii::$app->language])?>/<?=$sub_category['seo_url']?>"><?=$sub_category['name']?></a></li>
                            <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<!-- <script>
    function OpenMenu(){
        if(document.getElementById("dropdownone").style.display == "none")
        document.getElementById("dropdownone").style.display = "block";
        else document.getElementById("dropdownone").style.display = "none";
    }
</script> -->
<style>
@media(max-width: 767px){
    .red-fin99{
        width: 100%!important;
        padding: 0 15px;
    }
}
@media(min-width: 768px){
    #dropdownone{
        display:block!important;
    }
    .dis-mini34{
        display:none!important;
    }
}
</style>

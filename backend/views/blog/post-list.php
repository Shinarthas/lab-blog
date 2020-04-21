<?php
/**
 * Created by PhpStorm.
 * User: lenovo 1
 * Date: 10.11.2016
 * Time: 12:40
 */
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<style type="text/css">
    .nav-actions{
        margin-bottom: 10px;
    }
    .lang a{
        display: block;
        float: left;
        width: 30px;
        padding: 5px;
        background: #ccc;
        margin-right: 1px;
        text-align: center;
    }
    .lang a.active{
        background: #c6ff00;
    }
    html body .container table tr.draft td{
        background: rgba(213, 213, 213, 0.35);
    }
    html body .container table tr.new td {
        background: rgba(160, 253, 186, 0.5);
    }
    html body .container table tr.active td {
        background: rgba(163, 225, 255, 0.32);
    }

    html body .container table tr.active-min td {
        background: rgba(163, 225, 255, 0.5);
    }

    .search{
        margin: 30px 0 15px 0;
    }
</style>
<div class="nav-actions">
<a class="btn btn-success" href="<?=Url::toRoute('blog/post-new');?>">Добавить новую</a>
</div>
<div class="search">
    <form method="get" action="/blog/post-search">
        Поиск <input type="text" name="search">
        <input type="submit" value="Найти">
    </form>
</div>
<table class="table">
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Дата публикации</th>
        <th>Дата редактирования</th>
        <th>Transl</th>
        <th>Статус</th>
        <th style="width: 50px;">Опер.</th>

    </tr>

<? foreach ($models as $model) { ?>
<?php
    $tr_class="";

    $tr_class.=( ($model->date_update >= (time()-400) ) ? ' active-min' : '');
    $tr_class.=( ($model->date_update >= (time()-3600) ) ? ' active' : '');
    $tr_class.=( ($model->date_create >= (time()-3600) ) ? ' new' : '');
    $tr_class.=( $model->status == \common\models\Post::POST_DRAFT ) ? ' draft' : '';





    $model_lang = []; ?>
    <?php foreach ($model->translations as $trans){
        $model_lang[$trans->lang->id] = $trans->lang->url;
         } ?>
<tr class="<?=!empty($tr_class) ? $tr_class : '';?>">
    <td><?=$model->id?></td>
    <td><?=$model->title?></td>
    <td><?=date('d/m/Y H:i:s',$model->date_published)?></td>
    <td><?=date('d/m/Y H:i:s',$model->date_update)?></td>
    <td class="lang">
        <a class="active" href="<?=Url::toRoute(['blog/post-edit','id'=>$model->id]);?>">en</a>
        <?php foreach ($lang as $lang_ex){ ?>
            <a class="<?= isset($model_lang[$lang_ex->id]) ? 'active': ''; ?>" href="<?=Url::toRoute(['blog/post-translation','post_id'=>$model->id,'lang_id'=>$lang_ex->id]);?>"><?=$lang_ex->url?></a>
        <?php } ?>
    </td>
    <td><?=\common\models\Post::$statuses[$model->status]?></td>
    <td><a class="btn btn-primary glyphicon glyphicon-edit" href="<?=Url::toRoute(['blog/post-edit','id'=>$model->id]);?>"></a></td>
</tr>

<? } ?>
</table>


<?=LinkPager::widget([
    'pagination' => $pages,
]);?>

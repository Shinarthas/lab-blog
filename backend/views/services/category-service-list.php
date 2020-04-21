<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 24.01.2017
 * Time: 13:10
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
</style>
<div class="nav-actions">
    <a class="btn btn-success" href="<?=Url::toRoute('services/add-category-service');?>">Добавить новую</a>
</div>
<table class="table">
    <tr>
        <th>id</th>
        <th>Название</th>

        <th>Seo url</th>
        <th>Дата создания</th>
        <th style="width: 50px;">Опер.</th>

    </tr>

    <? foreach ($models as $model) { ?>
        <tr>
            <td><?=$model->id?></td>
            <td><?=$model->name?></td>
            <td><?=$model->url?></td>
            <td><?=date('d/m/Y H:i:s',$model->date_create)?></td>
            <td><a class="btn btn-primary glyphicon glyphicon-edit" href="<?=Url::toRoute(['services/edit-category-service','id'=>$model->id]);?>"></a></td>
        </tr>
    <? } ?>
</table>


<?=LinkPager::widget([
    'pagination' => $pages,
]);?>

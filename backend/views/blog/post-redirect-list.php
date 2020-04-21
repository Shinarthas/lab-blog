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
<a class="btn btn-success" href="<?=Url::toRoute('blog/add-post-redirect');?>">Добавить новую</a>
</div>
<!--<div class="search">-->
<!--    <form method="get" action="/blog/post-search">-->
<!--        Поиск <input type="text" name="search">-->
<!--        <input type="submit" value="Найти">-->
<!--    </form>-->
<!--</div>-->
<table class="table">
    <tr>
        <th>id</th>
        <th>Url c</th>
        <th>Url на</th>
        <th>код редиректа</th>
        <th>Дата</th>
        <th>Опер</th>
    </tr>

<? foreach ($models as $model) { ?>

<tr class="">
    <td><?=$model->id?></td>
    <td><?=$model->url_from?></td>
    <td><?=$model->url_too?></td>
    <td><?=$model->code?></td>
    <td><?=date('d/m/Y H:i:s',$model->date_create)?></td>
    <td><a class="btn btn-danger" href="<?=Url::toRoute(['blog/post-redirect-remove','id'=>$model->id]);?>">x</a></td>
</tr>

<? } ?>
</table>


<?=LinkPager::widget([
    'pagination' => $pages,
]);?>

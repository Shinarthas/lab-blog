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
    <a class="btn btn-success" href="<?=Url::toRoute('services/add-service');?>">Добавить новую</a>
</div>
<table class="table">
    <tr>
        <th>id</th>
        <th>Название</th>
        <th>Дата публикации</th>
        <th>Дата редактирования</th>

        <th>Статус</th>
        <th style="width: 50px;">Опер.</th>

    </tr>

    <? foreach ($models as $model) { ?>
        <?php
        $tr_class="";

        $tr_class.=( ($model->date_update >= (time()-400) ) ? ' active-min' : '');
        $tr_class.=( ($model->date_update >= (time()-3600) ) ? ' active' : '');
        $tr_class.=( ($model->date_create >= (time()-3600) ) ? ' new' : '');
        $tr_class.=( $model->status == \common\models\Services::SERVICE_DRAFT ) ? ' draft' : '';
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
                <a class="active" href="<?=Url::toRoute(['services/service-edit','id'=>$model->id]);?>">en</a>
            </td>

            <td><?=\common\models\Services::$statuses[$model->status]?></td>
            <td><a class="btn btn-primary glyphicon glyphicon-edit" href="<?=Url::toRoute(['services/service-edit','id'=>$model->id]);?>"></a></td>
        </tr>

    <? } ?>
</table>


<?=LinkPager::widget([
    'pagination' => $pages,
]);?>

<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 08.02.2017
 * Time: 13:15
 */

use yii\widgets\LinkPager;
use yii\helpers\Url;

?>

<style type="text/css">



</style>

<table class="table">
    <tr>
        <th>id</th>
        <th>Категория</th>
        <th style="width: 50px;">Опер.</th>

    </tr>

    <? foreach ($models as $model) { ?>
        <tr>
            <td><?=$model->id?></td>
            <td><?=$model->name?></td>
            <td><a class="btn btn-primary glyphicon glyphicon-edit" href="<?=Url::toRoute(['post-category-banner/post-category-banner','id'=>$model->id]);?>"></a></td>
        </tr>

    <? } ?>
</table>


<?=LinkPager::widget([
    'pagination' => $pages,
]);?>


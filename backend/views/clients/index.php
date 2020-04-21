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
</style>

<table class="table">
    <tr>
        <th>id</th>
        <th>email</th>
        <th>Дата</th>
        <th style="width: 50px;">Опер.</th>
    </tr>
    <? foreach ($models as $model) { ?>

        <tr>
            <td><?=$model->id?></td>
            <td><?=$model->client_email?></td>
            <td><?=date('Y-m-d H:i:s',$model->date_created)?></td>
            <td><a href="/clients/hide?id=<?=$model->id?>">hide</a> </td>
        </tr>

    <? } ?>
</table>


<?=LinkPager::widget([
    'pagination' => $pages,
]);?>

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
        <th>Имя</th>
        <th>Info</th>
        <th>Email</th>
        <th>Бюджет</th>
        <th>Статус</th>
        <th>Дата</th>
		<th>Онлайн</th>
        <th style="width: 220px;">Опер.</th>
    </tr>
<? foreach ($models as $model) { ?>

<tr <?=$model->status==\common\models\Contacts::CONTACTS_NEW ? 'style="background: #ebfdd0;"':'';?>>
    <td><?=$model->id?></td>
    <td><?=$model->username?></td>
    <td><?=$model->details?></td>
    <td><?=$model->email?></td>
    <td><?=$model->budget?></td>
    <td><?=\common\models\Contacts::$contacts_status[$model->status]?></td>
    <td><?=date('d/m/Y H:i:s',$model->date_create)?></td>
	<td> <?=\common\components\EasyTime::timeAgoShort($model->last_online);?></td>
    <td>
<!--        <a href="/contacts/hide?id=--><?//=$model->id?><!--">hide</a> -->

        <select data-id="<?=$model->id?>" class="change-status">
            <?php foreach (\common\models\Contacts::$contacts_status as $id=>$value){ ?>
            <option  value="<?=$id?>" <?=$id==$model->status ? 'selected' : ''?> ><?=$value?></option>

            <?php } ?>
        </select>
		<a href="/contacts/<?=$model->id;?>">info</a>
    </td>
</tr>

<? } ?>
</table>

<script>
$(function () {
   $('.change-status').change(function () {
       $.ajax({
           method: "POST",
           url: "/contacts/change-status",
           data: { id: $(this).data('id'), status: $(this).val() }
       })
           .done(function( resp ) {
               if(resp == 'ok'){
                   document.location.reload();
               }else{
                   alert('Что то пошло не так :(');
                   console.log(resp);
               }
           });
   }) 
});
</script>

<?=LinkPager::widget([
    'pagination' => $pages,
]);?>

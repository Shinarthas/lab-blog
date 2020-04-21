<?php

/**
 * @var $this \yii\web\View
 * @var $users \common\models\User[]|[]
 * @var $pagination \yii\data\Pagination
 */

use yii\widgets\LinkPager;
use backend\assets\KendoAsset;
use common\models\Client;

$this->title = 'Sales';

KendoAsset::register($this);

?>
<style>
.container
{
	width: 100%;
}
</style>


<script type="text/x-kendo-template" id="myTemplate">
	<a href="/clients/edit?id=#= id #" class="fa fa-pencil">edit</a>
</script>
		
<div id="grid"></div>
<br>
<a href="/clients/edit?id=0"><button class="btn btn-primary">Add client</button></a>
<script>
$(function(){
	


	var grid = $('#grid').kendoGrid({
        dataSource: {
            type: 'json',
            transport: {
                read: ''
            },
            schema: {
                data: 'data',
                total: 'total'
            },
            pageSize: 20,
            serverPaging: true,
            serverFiltering: true
        },
        sortable: {
            mode: 'single'
        },
        filterable: {
            mode: 'row'
        },
        pageable: true,
        columns: [
			{
                title: 'ID',
                field: 'id',
				 width: 40
				 
            },{
                title: 'name',
                field: 'name',
				 
            },{
                title: 'description',
                field: 'description',
				 
            },{
                title: 'from_where',
                field: 'from_where',
				 values: [
					<? foreach(Client::$from_where_array as $value=>$text):?>
						{
                        text: '<?=$text;?>',
                        value: <?=$value;?>
                    },
					<? endforeach;?>
				 ]
				 
            },{
                title: 'account_to_contact',
                field: 'account_to_contact',
				 
            },{
                title: 'link_to_contact',
                field: 'link_to_contact',
				 
            },{
                title: 'contact_name',
                field: 'contact_name',
				 
            },{
                title: 'created_at',
                field: 'created_at',
				 
            },{
                title: 'est_budget',
                field: 'est_budget',
				 
            },{
                title: 'category_id',
                field: 'category_id',
				 values: [
					<? foreach(Client::$category_array as $value=>$text):?>
						{
                        text: '<?=$text;?>',
                        value: <?=$value;?>
                    },
					<? endforeach;?>
				 ]
				 
            },{
                title: 'status',
                field: 'status',
				 values: [
					<? foreach(Client::$status_array as $value=>$text):?>
						{
                        text: '<?=$text;?>',
                        value: <?=$value;?>
                    },
					<? endforeach;?>
				 ]
				 
            },{
				template: kendo.template($("#myTemplate").html()),
				 width: 50

            }
		]
	}).data('kendoGrid');
	


})


</script>
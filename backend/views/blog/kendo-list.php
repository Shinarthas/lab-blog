<?php
use backend\assets\KendoAsset;
use yii\helpers\Url;
use common\models\PostCategory;
$categories = PostCategory::find()->all();

KendoAsset::register($this);
?>
<style>
	.wrap > .container
	{
		width:2200px;
	}
	.k-grid-header-wrap .k-filter-row th > span[data-field="id"] .k-header
	{
		width:40px!important;
	}
	.k-grid-header-wrap .k-filter-row th > span[data-field="id"] .k-dropdown-operator
	{
		display:none;
	}
	.k-filtercell > span
	{
		max-width:200px;
		    width: 41%;
	}
	.k-widget.k-combobox.k-header
	{
		width:60px;
	}
</style>
<h4 class="widget-title">Statustic by second status</h4>
<? 
$statistic = [];
foreach($posts as $p)
	$statistic[$p->status_second]++;
	
for($i=0;$i<=10;$i++)
	echo $i.": ".(int)$statistic[$i]."<br>";
?>
<div class="widget">
	<header class="widget-header">
		<h4 class="widget-title">Posts list</h4>
	</header>
	<hr class="widget-separator">
	<div class="widget-body">
		<table id="grid">
		       <colgroup>
                    <col />
                </colgroup>
                <thead>
                    <tr>
                        <th data-field="id">id</th>
						<th data-field="status_second">Статус 2</th>
						<th data-field="comment">comment</th>
						<th data-field="title">название</th>
						<th data-field="category">категория</th>
						
						<th data-field="hashtag">hashtag</th>
						<th data-field="date_published">Опубликов</th>
						<th data-field="date_update">Отредактир</th>
						<th data-field="status">Статус</th>
						
						<th data-field="link_images">Картинки</th>
						<th data-field="link_additional">Ссылки</th>
						<th data-field="link_guest_blog">Guest Blog</th>
						
						<th data-field="content_length">content length</th>
						<th data-field="unique_percent">unique percent</th>
						<th data-field="smm_1">s1</th>
						<th data-field="smm_2">s2</th>
						<th data-field="smm_3">s3</th>
						<th data-field="smm_4">s4</th>
						<th data-field="edit">edit</th>
						
                    </tr>
                </thead>
				<tbody>
					<? foreach($posts as $p):?>
						<tr>
							<td><?=$p->id;?></td>
							<td><?=$p->status_second;?></td>
							<td><?=$p->comment;?></td>
							<td><?=$p->title;?></td>
							<td><?=$p->category->id_category;?></td>
							
							<td><?=$p->hashtag;?></td>
							<td><?=date('Y-m-d',$p->date_published)?></td>
							<td><?=date('Y-m-d',$p->date_update)?></td>
							<td><?=$p->status;?></td>
							
							<td><?=$p->link_images;?></td>
							<td><?=$p->link_additional;?></td>
							<td><?=$p->link_guest_blog;?></td>
							
							<td><?=$p->content_length;?></td>
							<td><?=$p->unique_percent;?></td>
							<td><?=$p->smm_1;?></td>
							<td><?=$p->smm_2;?></td>
							<td><?=$p->smm_3;?></td>
							<td><?=$p->smm_4;?></td>
							<td><?=$p->id;?></td>
						</tr>
					<? endforeach;?>
				</tbody>
		</table>

		
		<div class="clearfix"></div>
	</div>
</div>

<script type="text/x-kendo-template" id="edit">
	<a href="/blog/post-edit?id=#=id#">edit</a>
</script>
<script type="text/x-kendo-template" id="link_images">
	# if(link_images != '' ){ #
		<a href="#=link_images#">link</a>
	# } #
</script>
<script type="text/x-kendo-template" id="link_additional">
	# if(link_additional != '' ){ #
		<a href="#=link_additional#">link</a>
	# } #
</script>
<script type="text/x-kendo-template" id="link_guest_blog">
	# if(link_guest_blog != '' ){ #	
		<a href="#=link_guest_blog#">link</a>
	# } #
</script>
<script>
$(function(){
					$("#grid").kendoGrid({
						sortable: {
							mode: 'single'
						},
						filterable: {
							mode: 'row'
						},
						columns: [
							{
								title: 'ID',
								field: 'id',
								width: 70,
							},{
								title: 'ID',
								field: 'status_second',
								 values: [
										{text: "0", value: "0"},
										{text: "1", value: "1"},
										{text: "2", value: "2"},
										{text: "3", value: "3"},
										{text: "4", value: "4"},
										{text: "5", value: "5"},
										{text: "6", value: "6"},
										{text: "7", value: "7"},
										{text: "8", value: "8"},
										{text: "9", value: "9"},
										{text: "10", value: "10"},
								]
							},
							{
								title: 'ID',
								field: 'comment',
								 
							},
							{
								title: 'ID',
								field: 'title',
								 
							},
							{
								title: 'ID',
								field: 'category',
								  values: [
									<? foreach($categories as $c):?>
										{text: "<?=$c->name;?>", value: "<?=$c->id;?>"},
									<? endforeach;?>
									],
							},
							{
								title: 'ID',
								field: 'hashtag',
								 
							},
							{
								title: 'ID',
								field: 'date_published',
								 format: "{0: yyyy-MM-dd}",
								type: "date",
							},
							{
								title: 'ID',
								field: 'date_update',
								 format: "{0: yyyy-MM-dd}",
								type: "date",
							},
							{
								title: 'ID',
								field: 'status',
								 
								 values: [
										{text: "Опубликованно", value: "1"},
										{text: "Черновик", value: "0"},
								]
							},
							{
								title: 'ID',
								field: 'link_images',
								filterable: false,
								template: kendo.template($("#link_images").html()),
								 
							},
							{
								title: 'ID',
								field: 'link_additional',
								 filterable: false,
								 template: kendo.template($("#link_additional").html()),
							},
							{
								title: 'ID',
								field: 'link_guest_blog',
								 filterable: false,
								 template: kendo.template($("#link_guest_blog").html()),
							},
							{
								title: 'ID',
								field: 'content_length',
								 
							},
							{
								title: 'ID',
								field: 'unique_percent',
								 
							},
							{
								title: 'ID',
								field: 'smm_1',
								  values: [
										{text: "no", value: "0"},
										{text: "yes", value: "1"},
									],
							},
							{
								title: 'ID',
								field: 'smm_2',
								 values: [
										{text: "no", value: "0"},
										{text: "yes", value: "1"},
									],
							},
							{
								title: 'ID',
								field: 'smm_3',
								 values: [
										{text: "no", value: "0"},
										{text: "yes", value: "1"},
									],
							},
							{
								title: 'ID',
								field: 'smm_4',
								 values: [
										{text: "no", value: "0"},
										{text: "yes", value: "1"},
									],
							},
							{
								title: 'ID',
								field: 'edit',
								 filterable: false,
								 template: kendo.template($("#edit").html()),
							},
						]
                    });
})

</script>
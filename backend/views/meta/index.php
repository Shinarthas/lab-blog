<td><a href="/meta/edit" class="btn btn-primary">Add new</a></td>
<br><br>

<table class="table">

<tr>
	<th>url</th>
	<th>title</th>
	<th>image</th>
	<th>action</th>
</tr>

<? foreach($tags as $t):?>
<tr>
	<td><?=$t->url;?></td>
	<td><?=$t->title;?></td>
	<td><a href="<?=\Yii::getAlias("@front");?>/images/temp/<?=$t->img;?>" target="_blank"><?=$t->img;?></a></td>
	<td><a href="/meta/edit?id=<?=$t->id?>" class="btn btn-primary glyphicon glyphicon-edit"> Edit</a></td>
</tr>
<? endforeach; ?>

</table>
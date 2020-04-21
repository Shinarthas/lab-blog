<?php
use yii\widgets\ActiveForm;
?>

<b><?=$link;?></b>

<br><br>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
	 <?= $form->field($tag, 'url')->textInput(['placeholder' => '/site/index']) ?>
	 <?= $form->field($tag, 'title') ?>
	 <?= $form->field($tag, 'description') ?>
	 
	<div class="form-group field-metatag-title">
		<label class="control-label" for="metatag-title">Image</label>
			<input type="file" name="image">

	</div>

<br><br>
<input type="submit" value="save" name="save">

<?php ActiveForm::end(); ?>
<?php



use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>


<?php $form = ActiveForm::begin(); ?>
<div class="row">
    
    <div class="panel panel-default">

        <div class="panel-body" id="certificate_fields">
			<div class="col-md-4">
				<?= $form->field($client, 'name'); ?>
				<?= $form->field($client, 'description'); ?>
				<?= $form->field($client, 'contact_name'); ?>
				<?= $form->field($client, 'est_budget'); ?>
				<?= $form->field($client, 'category_id')->dropDownList($client::$category_array); ?>
				
				<?= $form->field($client, 'comment')->textarea(); ?>
				<?= $form->field($client, 'status')->dropDownList($client::$status_array); ?>
				
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-4">
				
				<?= $form->field($client, 'from_where')->dropDownList($client::$from_where_array); ?>
				<?= $form->field($client, 'account_to_contact'); ?>
				<?= $form->field($client, 'link_to_contact'); ?>
				<?= $form->field($client, 'site'); ?>
				<?= $form->field($client, 'phone'); ?>
				<?= $form->field($client, 'skype'); ?>
				<?= $form->field($client, 'email'); ?>

			</div>
           
        </div>
    </div>
</div>
<input type="submit" value="save" name="save">
<?php ActiveForm::end(); ?>

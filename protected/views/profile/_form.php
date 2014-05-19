<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profile-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_surname'); ?>
		<?php echo $form->textField($model,'name_surname',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'name_surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'published_date'); ?>
		<?php echo $form->textField($model,'published_date'); ?>
		<?php echo $form->error($model,'published_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_seen_date'); ?>
		<?php echo $form->textField($model,'last_seen_date'); ?>
		<?php echo $form->error($model,'last_seen_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_missing'); ?>
		<?php echo $form->textField($model,'is_missing'); ?>
		<?php echo $form->error($model,'is_missing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id'); ?>
		<?php echo $form->error($model,'contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city_ptt'); ?>
		<?php echo $form->textField($model,'city_ptt'); ?>
		<?php echo $form->error($model,'city_ptt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_seen_destination'); ?>
		<?php echo $form->textField($model,'last_seen_destination',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'last_seen_destination'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
/* @var $this ProfileController */
/* @var $model Profile */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_surname'); ?>
		<?php echo $form->textField($model,'name_surname',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'published_date'); ?>
		<?php echo $form->textField($model,'published_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_seen_date'); ?>
		<?php echo $form->textField($model,'last_seen_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_missing'); ?>
		<?php echo $form->textField($model,'is_missing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_ptt'); ?>
		<?php echo $form->textField($model,'city_ptt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_seen_destination'); ?>
		<?php echo $form->textField($model,'last_seen_destination',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
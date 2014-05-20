<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */
/* @var $form CActiveForm */
?>

<div class="form form-evakuisani">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evacuees-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class=""col-md-3">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class=""col-md-3">
		<?php echo $form->labelEx($model,'parent_name'); ?>
		<?php echo $form->textField($model,'parent_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'parent_name'); ?>
	</div>

	<div class=""col-md-3">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class=""col-md-3">
		<?php echo $form->labelEx($model,'birthday');
			$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'name'=>'Evacuees[birthday]',
			'id'=>'Evacuees_birthday',
			// additional javascript options for the date picker plugin
			'options'=>array(
			'showAnim'=>'fade',
			'dayNamesMin'=> array('Ned' ,'Pon', 'Uto', 'Sre', 'Čet', 'Pet', 'Sub'),
			'dateFormat'=>"dd.mm.yy",
			'firstDay'=>1,
			'monthNames'=>array('Januar', 'Februar', 'Mart', 'April', 'Maj', 'Juni', 'Juli', 'August', 'Septembar', 'Oktobar', 'Novembar', 'Decembar'),
			'monthNamesShort'=>array('Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dec'),
			'changeMonth'=>true,
			'changeYear'=>true
			),
			'htmlOptions'=>array(
			'required' =>'required',
			'class' => 'form-control',
			),
			));
			?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class=""col-md-3">
		<?php echo $form->labelEx($model,'hometown'); ?>
		<?php echo $form->textField($model,'hometown',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hometown'); ?>
	</div>

	<div class=""col-md-3">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class=""col-md-3 buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
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
		'htmlOptions'=>array(
			'enctype' => 'multipart/form-data',
		),

	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($profileModel); ?>

	<div class="row">
		<?php echo $form->labelEx($profileModel,'name_surname'); ?>
		<?php echo $form->textField($profileModel,'name_surname',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($profileModel,'name_surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profileModel,'description'); ?>
		<?php echo $form->textField($profileModel,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($profileModel,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profileModel,'last_seen_date');
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
		'name'=>'Profile[last_seen_date]',
		'id'=>'Profile_last_seen_date',
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
		'style'=>'height:2.3125rem;',
		'required' =>'required',
		),
		));
		?>
		<?php echo $form->error($profileModel,'last_seen_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profileModel,'image'); ?>
		<?php echo $form->fileField($profileModel,'image'); ?>
		<?php echo $form->error($profileModel,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profileModel,'city_ptt'); ?>
		<?php
		$list = CHtml::listData(City::model()->findAll(), 'ptt', 'name');
		echo CHtml::dropDownList('Profile[city_ptt]', $profileModel, $list);
		?>
		<?php echo $form->error($profileModel,'city_ptt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profileModel,'last_seen_destination'); ?>
		<?php echo $form->textField($profileModel,'last_seen_destination',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($profileModel,'last_seen_destination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($contactModel,'name'); ?>
		<?php echo $form->textField($contactModel,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($contactModel,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($contactModel,'email'); ?>
		<?php echo $form->textField($contactModel,'email',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($contactModel,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($contactModel,'phone'); ?>
		<?php echo $form->textField($contactModel,'phone',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($contactModel,'phone'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($profileModel->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->
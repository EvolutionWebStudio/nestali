<?php
/* @var $this ProfileController */
/* @var $data Profile */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_surname')); ?>:</b>
	<?php echo CHtml::encode($data->name_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('published_date')); ?>:</b>
	<?php echo CHtml::encode($data->published_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_seen_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_seen_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_missing')); ?>:</b>
	<?php echo CHtml::encode($data->is_missing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::encode($data->contact_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_ptt')); ?>:</b>
	<?php echo CHtml::encode($data->city_ptt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_seen_destination')); ?>:</b>
	<?php echo CHtml::encode($data->last_seen_destination); ?>
	<br />

	*/ ?>

</div>
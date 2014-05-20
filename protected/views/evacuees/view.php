<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */

$this->breadcrumbs=array(
	'Evacuees'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Evacuees', 'url'=>array('index')),
	array('label'=>'Create Evacuees', 'url'=>array('create')),
	array('label'=>'Update Evacuees', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Evacuees', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Evacuees', 'url'=>array('admin')),
);
?>

<h1>View Evacuees #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'parent_name',
		'sex',
		'birthday',
		'hometown',
		'location',
	),
)); ?>

<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */

$this->breadcrumbs=array(
	'Evacuees'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Evacuees', 'url'=>array('index')),
	array('label'=>'Create Evacuees', 'url'=>array('create')),
	array('label'=>'View Evacuees', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Evacuees', 'url'=>array('admin')),
);
?>

<h1>Update Evacuees <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
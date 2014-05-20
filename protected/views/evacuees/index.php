<?php
/* @var $this EvacueesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Evacuees',
);

$this->menu=array(
	array('label'=>'Create Evacuees', 'url'=>array('create')),
	array('label'=>'Manage Evacuees', 'url'=>array('admin')),
);
?>

<h1>Evacuees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

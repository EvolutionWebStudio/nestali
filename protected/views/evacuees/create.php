<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */



$this->menu=array(
	array('label'=>'Uređuj evakuisane', 'url'=>array('admin')),
);
?>

<h1>Unesi evakuisane</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
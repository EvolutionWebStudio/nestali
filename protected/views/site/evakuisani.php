<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */
$cs=Yii::app()->clientScript;
$cs->scriptMap=array(
	'jquery.js'=>false,
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#evacuees-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Evakuisani</h1>
<?php if(!Yii::app()->user->isGuest): ?>
<?php echo CHtml::link('Dodaj evakuisanog',array('evacuees/create'),array('class'=>'btn btn-primary')); ?>
<?php endif; ?>

<?php echo CHtml::link('Pretrazi evakuisane','#',array('class'=>'btn btn-default search-button')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'evacuees-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'{start} od {end} rezultata ( {page} stranica)',
	'columns'=>array(
		'name',
		'parent_name',
		'sex',
		array(            // display 'create_time' using an expression
			'name'=>'birthday',
			'value'=>'date("d.m.Y.", strtotime($data->birthday))',
		),
		'hometown',
		'location',
		array(
			'class'=>'CButtonColumn',
			'visible'=>!Yii::app()->user->isGuest,
		),
	),
)); ?>

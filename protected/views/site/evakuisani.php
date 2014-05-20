<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */


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
<?php echo CHtml::link('Dodaj evakuisanog',array('evacuees/create')); ?>
<?php endif; ?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
		'model'=>$model,
	)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'evacuees-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'summaryText'=>'{start}-{end} od {page} rezultata',
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

<?php
/* @var $this EvacueesController */
/* @var $model Evacuees */
/* @var $form CActiveForm */
?>

<div class="wide form panel panel-default">
    <div class="panel-heading">
        Upišite jedan ili više podataka za pretragu
    </div>
    <div class="panel-body">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'action'=>Yii::app()->createUrl($this->route),
            'method'=>'get',
        )); ?>

            <div class="col-md-3">
                <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>120, 'class' => 'form-control', 'placeholder' => 'Ime i prezime osobe')); ?>
            </div>

            <div class="col-md-2">
                <?php echo $form->textField($model,'parent_name',array('size'=>45,'maxlength'=>45, 'class' => 'form-control', 'placeholder' => 'Ime jednog roditelja')); ?>
            </div>

            <div class="col-md-2">
                <?php echo $form->textField($model,'hometown',array('size'=>45,'maxlength'=>45, 'class' => 'form-control', 'placeholder' => 'Mjesto rođenja')); ?>
            </div>

            <div class="col-md-2">
                <?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>140, 'class' => 'form-control', 'placeholder' => 'Trenutna lokacija')); ?>
            </div>

            <div class="buttons col-md-3">
                <?php echo CHtml::submitButton('Pretraži bazu evakuisanih', array('class' => 'btn btn-primary')); ?>
            </div>

        <?php $this->endWidget(); ?>
    </div>
</div><!-- search-form -->
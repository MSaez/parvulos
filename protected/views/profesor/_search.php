<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'RUT_P'); ?>
		<?php echo $form->textField($model,'RUT_P',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRE_P'); ?>
		<?php echo $form->textField($model,'NOMBRE_P',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDO_P'); ?>
		<?php echo $form->textField($model,'APELLIDO_P',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIPO_P'); ?>
		<?php echo $form->textField($model,'TIPO_P',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASS'); ?>
		<?php echo $form->passwordField($model,'PASS',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.Rut.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT_P'); ?>
		<?php echo $form->textField($model,'RUT_P',array('size'=>12,'maxlength'=>12)); ?>
		<?php Yii::app()->clientScript->registerScript("Rut",
			"$('#".CHtml::activeId($model, 'RUT_P')."').Rut({on_error: function(){ alert('Rut incorrecto'); }});",
			CClientScript::POS_READY);?>
		<?php echo $form->error($model,'RUT_P'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_P'); ?>
		<?php echo $form->textField($model,'NOMBRE_P',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOMBRE_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_P'); ?>
		<?php echo $form->textField($model,'APELLIDO_P',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'APELLIDO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TIPO_P'); ?>
		<?php echo $form->dropDownList($model,'TIPO_P', array('ADMINISTRADOR'=>'Administrador','PROFESOR'=>'Profesor',null=>'<-- Seleccione -->'));?>
		<?php echo $form->error($model,'TIPO_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASS'); ?>
		<?php echo $form->passwordField($model,'PASS',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'PASS'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
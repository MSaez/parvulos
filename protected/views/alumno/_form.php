<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.Rut.js');
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con  <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT_A'); ?>
		<?php echo $form->textField($model,'RUT_A',array('size'=>12,'maxlength'=>12)); ?>
		<?php Yii::app()->clientScript->registerScript("Rut",
			"$('#".CHtml::activeId($model, 'RUT_A')."').Rut({on_error: function(){ alert('Rut incorrecto'); }});",
			CClientScript::POS_READY);?>
		<?php echo $form->error($model,'RUT_A'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRE_A'); ?>
		<?php echo $form->textField($model,'NOMBRE_A',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'NOMBRE_A'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDO_A'); ?>
		<?php echo $form->textField($model,'APELLIDO_A',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'APELLIDO_A'); ?>
	</div>

	<div class="row buttons">
		
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
		
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
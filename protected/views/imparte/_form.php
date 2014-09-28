<?php
/* @var $this ImparteController */
/* @var $model Imparte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imparte-form',
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
		<?php echo $form->dropDownList($model,'RUT_P',CHtml::listData(Profesor::model()->findAll(),"RUT_P","fullname"),array('prompt'=>'Seleccione...'));?>
		<?php echo $form->error($model,'RUT_P'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_C'); ?>
		<?php echo $form->dropDownList($model,'ID_C',CHtml::listData(Curso::model()->findAll(),"ID_C","NOMBRE_C"),array('prompt'=>'Seleccione...'));?> 
		<?php echo $form->error($model,'ID_C'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
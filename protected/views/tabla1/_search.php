<?php
/* @var $this Tabla1Controller */
/* @var $model Tabla1 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_T1'); ?>
		<?php echo $form->textField($model,'ID_T1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_cursa'); ?>
		<?php echo $form->textField($model,'ID_cursa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUT_A'); ?>
		<?php echo $form->textField($model,'RUT_A',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANIO_C'); ?>
		<?php echo $form->textField($model,'ANIO_C'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
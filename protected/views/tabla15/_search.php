<?php
/* @var $this Tabla2Controller */
/* @var $model Tabla2 */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_T15'); ?>
		<?php echo $form->textField($model,'ID_T15'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_CURSA'); ?>
		<?php echo $form->textField($model,'ID_CURSA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RUT_A'); ?>
		<?php echo $form->textField($model,'RUT_A',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANIO_C'); ?>
		<?php echo $form->textField($model,'ANIO_C'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'E1'); ?>
		<?php echo $form->textField($model,'E1',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'E2'); ?>
		<?php echo $form->textField($model,'E2',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'E3'); ?>
		<?php echo $form->textField($model,'E3',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
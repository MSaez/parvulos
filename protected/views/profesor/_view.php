<?php
/* @var $this ProfesorController */
/* @var $data Profesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_P')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RUT_P), array('view', 'id'=>$data->RUT_P)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_P')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_P')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO_P')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASS')); ?>:</b>
	<?php echo CHtml::encode($data->PASS); ?>
	<br />


</div>
<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_A')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->RUT_A), array('view', 'id'=>$data->RUT_A)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_A')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_A); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDO_A')); ?>:</b>
	<?php echo CHtml::encode($data->APELLIDO_A); ?>
	<br />


</div>
<?php
/* @var $this CursaController */
/* @var $data Cursa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_A')); ?>:</b>
	<?php echo CHtml::encode($data->rUTA->NOMBRE_A.' '.$data->rUTA->APELLIDO_A); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_C')); ?>:</b>
	<?php echo CHtml::encode($data->iDC->NOMBRE_C); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANIO_C')); ?>:</b>
	<?php echo CHtml::encode($data->ANIO_C); ?>
	<br />


</div>
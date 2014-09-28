<?php
/* @var $this ImparteController */
/* @var $data Imparte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_P')); ?>:</b>
	<?php echo CHtml::encode($data->rUTP->NOMBRE_P.' '.$data->rUTP->APELLIDO_P); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_C')); ?>:</b>
	<?php echo CHtml::encode($data->iDC->NOMBRE_C); ?>
	<br />


</div>
<?php
/* @var $this CursoController */
/* @var $data Curso */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_C')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_C), array('view', 'id'=>$data->ID_C)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRE_C')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBRE_C); ?>
	<br />


</div>
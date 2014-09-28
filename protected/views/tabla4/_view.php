<?php
/* @var $this Tabla2Controller */
/* @var $data Tabla2 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_T4')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_T4), array('view', 'id'=>$data->ID_T4)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_CURSA')); ?>:</b>
	<?php echo CHtml::encode($data->ID_CURSA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT_A')); ?>:</b>
	<?php echo CHtml::encode($data->rUTA->NOMBRE_A." ".$data->rUTA->APELLIDO_A); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANIO_C')); ?>:</b>
	<?php echo CHtml::encode($data->ANIO_C); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('A1_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A1_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A1_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A1_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A1_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A1_E3); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('A2_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A2_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A2_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A2_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A2_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A2_E3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A3_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A3_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A3_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A3_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A3_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A3_E3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A4_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A4_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A4_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A4_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A4_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A4_E3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A5_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A5_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A5_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A5_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A5_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A5_E3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A6_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A6_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A6_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A6_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A6_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A6_E3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A7_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A7_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A7_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A7_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A7_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A7_E3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A8_E1')); ?>:</b>
	<?php echo CHtml::encode($data->A8_E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A8_E2')); ?>:</b>
	<?php echo CHtml::encode($data->A8_E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('A8_E3')); ?>:</b>
	<?php echo CHtml::encode($data->A8_E3); ?>
	<br />
	*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('E1')); ?>:</b>
	<?php echo CHtml::encode($data->E1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('E2')); ?>:</b>
	<?php echo CHtml::encode($data->E2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('E3')); ?>:</b>
	<?php echo CHtml::encode($data->E3); ?>
	<br />

	

</div>
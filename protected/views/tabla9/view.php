﻿<?php
/* @var $this Tabla9Controller */
/* @var $model Tabla9 */

$this->breadcrumbs=array(
	'09. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA LECTURA'=>array('index'),
	$model->ID_T9,
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Actualizar Evaluación', 'url'=>array('update', 'id'=>$model->ID_T9)),
	array('label'=>'Eliminar Evaluación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_T9),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
);
?>

<h1>Ver Evaluación #<?php echo $model->ID_T9; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_T9',
		'ID_CURSA',
		array('name'=>'RUT_A', 
              'header'=>'Alumno',
              'value'=>$model->rUTA->NOMBRE_A." ".$model->rUTA->APELLIDO_A),
		'ANIO_C',
		'A1_E1',
		'A1_E2',
		'A1_E3',
		'A2_E1',
		'A2_E2',
		'A2_E3',
		'A3_E1',
		'A3_E2',
		'A3_E3',
		'A4_E1',
		'A4_E2',
		'A4_E3',
		'A5_E1',
		'A5_E2',
		'A5_E3',
		'A6_E1',
		'A6_E2',
		'A6_E3',
		'A7_E1',
		'A7_E2',
		'A7_E3',
		'A8_E1',
		'A8_E2',
		'A8_E3',
		'A9_E1',
		'A9_E2',
		'A9_E3',
		'A10_E1',
		'A10_E2',
		'A10_E3',
		'A11_E1',
		'A11_E2',
		'A11_E3',
		'A12_E1',
		'A12_E2',
		'A12_E3',
		'A13_E1',
		'A13_E2',
		'A13_E3',
		'A14_E1',
		'A14_E2',
		'A14_E3',
		'A15_E1',
		'A15_E2',
		'A15_E3',
		'A16_E1',
		'A16_E2',
		'A16_E3',
		'E1',
		'E2',
		'E3',
	),
)); ?>
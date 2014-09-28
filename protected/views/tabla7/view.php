<?php
/* @var $this Tabla7Controller */
/* @var $model Tabla7 */

$this->breadcrumbs=array(
	'07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA'=>array('index'),
	$model->ID_T7,
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva Evaluaci�n', 'url'=>array('create')),
	array('label'=>'Actualizar Evaluaci�n', 'url'=>array('update', 'id'=>$model->ID_T7)),
	array('label'=>'Eliminar Evaluaci�n', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_T7),'confirm'=>'�Seguro que quieres borrar este elemento?')),
);
?>

<h1>Ver Evaluaci�n #<?php echo $model->ID_T7; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_T7',
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
		'E1',
		'E2',
		'E3',
	),
)); ?>

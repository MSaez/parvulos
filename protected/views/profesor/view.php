<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->RUT_P,
);

$this->menu=array(
	array('label'=>'Listar Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Actualizar Profesor', 'url'=>array('update', 'id'=>$model->RUT_P)),
	array('label'=>'Eliminar Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RUT_P),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
	
);
?>

<h1>Ver Profesor: <?php echo $model->NOMBRE_P.' '.$model->APELLIDO_P; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RUT_P',
		'NOMBRE_P',
		'APELLIDO_P',
		'TIPO_P',
		'PASS',
	),
)); ?>

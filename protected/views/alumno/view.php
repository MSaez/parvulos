<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->RUT_A,
);

$this->menu=array(
	array('label'=>'Listar Alumnos', 'url'=>array('index')),
	array('label'=>'Nuevo Alumno', 'url'=>array('create')),
	array('label'=>'Actualizar Alumno', 'url'=>array('update', 'id'=>$model->RUT_A)),
	array('label'=>'Eliminar Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->RUT_A),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Alumnos', 'url'=>array('admin')),
);
?>

<h1>Ver Alumno: <?php echo $model->NOMBRE_A.' '.$model->APELLIDO_A; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'RUT_A',
		'NOMBRE_A',
		'APELLIDO_A',
	),
)); ?>

<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->RUT_P=>array('view','id'=>$model->RUT_P),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	array('label'=>'Ver Profesor', 'url'=>array('view', 'id'=>$model->RUT_P)),
	array('label'=>'Administrar Profesores', 'url'=>array('admin')),
);
?>

<h1>Actualizar Profesor: <?php echo $model->NOMBRE_P.' '.$model->APELLIDO_P; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
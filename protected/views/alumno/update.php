<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->RUT_A=>array('view','id'=>$model->RUT_A),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Alumnos', 'url'=>array('index')),
	array('label'=>'Nuevo Alumno', 'url'=>array('create')),
	array('label'=>'Ver Alumno', 'url'=>array('view', 'id'=>$model->RUT_A)),
	array('label'=>'Administrar Alumnos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Alumno <?php echo $model->RUT_A; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Alumnos', 'url'=>array('index')),
	array('label'=>'Administrar Alumnos', 'url'=>array('admin')),
);
?>

<h1>Nuevo Alumno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this CursaController */
/* @var $model Cursa */

$this->breadcrumbs=array(
	'Asignaciones de curso'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de curso', 'url'=>array('index')),
	array('label'=>'Administrar Asignaciones de curso', 'url'=>array('admin')),
);
?>

<h1>Nueva Asignación de curso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
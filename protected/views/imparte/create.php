<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones de profesor'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de profesor', 'url'=>array('index')),
	array('label'=>'Administrar Asignaciones de profesor', 'url'=>array('admin')),
);
?>

<h1>Nueva Asignación de profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this ImparteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignaciones de profesor',
);

$this->menu=array(
	array('label'=>'Nueva Asignación de profesor', 'url'=>array('create')),
	array('label'=>'Administrar Asignaciones de profesor', 'url'=>array('admin')),
);
?>

<h1>Asignaciones de profesor</h1>

<h5>En esta sección se gestionarán las asignaciones de profesor

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

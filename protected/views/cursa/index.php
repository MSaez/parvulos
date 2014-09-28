<?php
/* @var $this CursaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignaciones de curso',
);

$this->menu=array(
	array('label'=>'Nueva Asignación de curso', 'url'=>array('create')),
	array('label'=>'Administrar Asignaciones de curso', 'url'=>array('admin')),
);
?>

<h1>Asignaciones de curso</h1>

<h5>En esta sección se gestionarán las asignaciones de curso.</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

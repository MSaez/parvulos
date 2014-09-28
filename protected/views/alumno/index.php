<?php
/* @var $this AlumnoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnos',
);

$this->menu=array(
	array('label'=>'Nuevo Alumno', 'url'=>array('create')),
	array('label'=>'Administrar Alumnos', 'url'=>array('admin')),
);
?>

<h1>Alumnos</h1>

<h5>En esta sección se gestionarán los alumnos.</h5>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

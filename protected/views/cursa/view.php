<?php
/* @var $this CursaController */
/* @var $model Cursa */

$this->breadcrumbs=array(
	'Cursas'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de curso', 'url'=>array('index')),
	array('label'=>'Nueva Asignación de curso', 'url'=>array('create')),
	array('label'=>'Actualizar Asignación de curso', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Eliminar Asignación de curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Asignaciones de curso', 'url'=>array('admin')),
);
?>

<h1>Ver Asignación de curso #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		array('name'=>'RUT_A', 
              'header'=>'Alumno',
              'value'=>$model->rUTA->NOMBRE_A." ".$model->rUTA->APELLIDO_A),
		array('name'=>'ID_C', 
              'header'=>'Curso',
              'value'=>$model->iDC->NOMBRE_C),
		'ANIO_C',
	),
)); ?>

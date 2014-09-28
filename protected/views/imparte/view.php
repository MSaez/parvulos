<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones de profesor'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de profesor', 'url'=>array('index')),
	array('label'=>'Nuevo Asignación de profesor', 'url'=>array('create')),
	array('label'=>'Actualizar Asignación de profesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Asignación de profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Asignaciones de profesor', 'url'=>array('admin')),
);
?>

<h1>Ver Asignación de profesor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('name'=>'RUT_P', 
              'header'=>'Profesor',
              'value'=>$model->rUTP->NOMBRE_P." ".$model->rUTP->APELLIDO_P),
		array('name'=>'ID_C', 
              'header'=>'Curso',
              'value'=>$model->iDC->NOMBRE_C),
	),
)); ?>

<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones de profesor'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de profesor', 'url'=>array('index')),
	array('label'=>'Nueva Asignación de profesor', 'url'=>array('create')),
	array('label'=>'Ver Asignación de profesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Asignaciones de profesor', 'url'=>array('admin')),
);
?>

<h1>Actualizar Asignación de profesor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
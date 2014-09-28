<?php
/* @var $this CursaController */
/* @var $model Cursa */

$this->breadcrumbs=array(
	'Asignaciones de curso'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de curso', 'url'=>array('index')),
	array('label'=>'Nueva asignación de curso', 'url'=>array('create')),
	array('label'=>'Ver asignación de curso', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Administrar Asignaciones de curso', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cursa <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
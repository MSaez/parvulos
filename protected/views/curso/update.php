<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->ID_C=>array('view','id'=>$model->ID_C),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Cursos', 'url'=>array('index')),
	array('label'=>'Nuevo Curso', 'url'=>array('create')),
	array('label'=>'Ver Curso', 'url'=>array('view', 'id'=>$model->ID_C)),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Curso <?php echo $model->ID_C; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this CursoController */
/* @var $model Curso */

$this->breadcrumbs=array(
	'Cursos'=>array('index'),
	$model->ID_C,
);

$this->menu=array(
	array('label'=>'Listar Cursos', 'url'=>array('index')),
	array('label'=>'Nuevo Curso', 'url'=>array('create')),
	array('label'=>'Actualizar Curso', 'url'=>array('update', 'id'=>$model->ID_C)),
	array('label'=>'Eliminar Curso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_C),'confirm'=>'¿Seguro que quieres borrar este elemento?')),
	array('label'=>'Administrar Cursos', 'url'=>array('admin')),
);
?>

<h1>Ver Curso <?php echo $model->NOMBRE_C; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_C',
		'NOMBRE_C',
	),
)); ?>

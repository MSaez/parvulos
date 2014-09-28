<?php
/* @var $this Tabla9Controller */
/* @var $model Tabla9 */

$this->breadcrumbs=array(
	'09. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA LECTURA'=>array('index'),
	$model->ID_T9=>array('view','id'=>$model->ID_T9),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T9)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T9; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
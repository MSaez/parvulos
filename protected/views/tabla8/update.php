<?php
/* @var $this Tabla8Controller */
/* @var $model Tabla8 */

$this->breadcrumbs=array(
	'08. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: COMUNICACIÓN ORAL'=>array('index'),
	$model->ID_T8=>array('view','id'=>$model->ID_T8),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T8)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T8; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
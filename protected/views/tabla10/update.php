<?php
/* @var $this Tabla10Controller */
/* @var $model Tabla10 */

$this->breadcrumbs=array(
	'10. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA ESCRITURA'=>array('index'),
	$model->ID_T10=>array('view','id'=>$model->ID_T10),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T10)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T10; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
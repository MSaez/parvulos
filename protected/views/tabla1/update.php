<?php
/* @var $this Tabla1Controller */
/* @var $model Tabla1 */

$this->breadcrumbs=array(
	'01. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: MOTRICIDAD'=>array('index'),
	$model->ID_T1=>array('view','id'=>$model->ID_T1),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T1)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>

<h1>Actualizar Evaluación <?php echo $model->ID_T1; ?></h1>

<h5>01. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: MOTRICIDAD</h5>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
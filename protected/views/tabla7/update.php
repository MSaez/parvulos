<?php
/* @var $this Tabla7Controller */
/* @var $model Tabla7 */

$this->breadcrumbs=array(
	'07. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACIÓN VALÓRICA'=>array('index'),
	$model->ID_T7=>array('view','id'=>$model->ID_T7),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T7)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T7; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
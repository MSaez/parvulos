<?php
/* @var $this Tabla6Controller */
/* @var $model Tabla6 */

$this->breadcrumbs=array(
	'06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL'=>array('index'),
	$model->ID_T6=>array('view','id'=>$model->ID_T6),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T6)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T6; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
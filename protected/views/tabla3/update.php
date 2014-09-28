<?php
/* @var $this Tabla3Controller */
/* @var $model Tabla3 */

$this->breadcrumbs=array(
	'03. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: INDEPENDENCIA'=>array('index'),
	$model->ID_T3=>array('view','id'=>$model->ID_T3),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T3)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T3; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this Tabla2Controller */
/* @var $model Tabla2 */

$this->breadcrumbs=array(
	'02. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: CUIDADO DE SÍ MISMO'=>array('index'),
	$model->ID_T2=>array('view','id'=>$model->ID_T2),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T2)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>

<h1>Actualizar Evaluación <?php echo $model->ID_T2; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this Tabla5Controller */
/* @var $model Tabla5 */

$this->breadcrumbs=array(
	'05. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y EXPRESIÓN DE SENTIMIENTOS'=>array('index'),
	$model->ID_T5=>array('view','id'=>$model->ID_T5),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T5)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T5; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
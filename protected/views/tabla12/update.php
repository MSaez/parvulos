<?php
/* @var $this Tabla12Controller */
/* @var $model Tabla12 */

$this->breadcrumbs=array(
	'12. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: APRECIACIÓN ESTÉTICA'=>array('index'),
	$model->ID_T12=>array('view','id'=>$model->ID_T12),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T12)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T12; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
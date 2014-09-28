<?php
/* @var $this Tabla11Controller */
/* @var $model Tabla11 */

$this->breadcrumbs=array(
	'11. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: EXPRESIÓN CREATIVA'=>array('index'),
	$model->ID_T11=>array('view','id'=>$model->ID_T11),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T11)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T11; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this Tabla16Controller */
/* @var $model Tabla16 */

$this->breadcrumbs=array(
	'16. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: CUANTIFICACIÓN'=>array('index'),
	$model->ID_T16=>array('view','id'=>$model->ID_T16),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T16)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T16; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
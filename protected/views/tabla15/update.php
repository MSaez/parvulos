<?php
/* @var $this Tabla15Controller */
/* @var $model Tabla15 */

$this->breadcrumbs=array(
	'15. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: RAZONAMIENTO LÓGICO-MATEMÁTICO'=>array('index'),
	$model->ID_T15=>array('view','id'=>$model->ID_T15),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T15)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T15; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this Tabla4Controller */
/* @var $model Tabla4 */

$this->breadcrumbs=array(
	'04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO'=>array('index'),
	$model->ID_T4=>array('view','id'=>$model->ID_T4),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T4)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T4; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
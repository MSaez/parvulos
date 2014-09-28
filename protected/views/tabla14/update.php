<?php
/* @var $this Tabla14Controller */
/* @var $model Tabla14 */

$this->breadcrumbs=array(
	'14. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: GRUPOS HUMANOS, SUS FORMAS DE VIDA Y ACONTECIMIENTOS RELEVANTES, EJE DE APRENDIZAJE: CONOCIMIENTO DEL ENTORNO SOCIAL'=>array('index'),
	$model->ID_T14=>array('view','id'=>$model->ID_T14),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T14)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T14; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
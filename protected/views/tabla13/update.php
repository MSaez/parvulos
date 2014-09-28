<?php
/* @var $this Tabla13Controller */
/* @var $model Tabla13 */

$this->breadcrumbs=array(
	'13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL'=>array('index'),
	$model->ID_T13=>array('view','id'=>$model->ID_T13),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluación', 'url'=>array('index')),
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Ver Evaluación', 'url'=>array('view', 'id'=>$model->ID_T13)),
	array('label'=>'Administrar Evaluación', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluación <?php echo $model->ID_T13; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
/* @var $this Tabla7Controller */
/* @var $model Tabla7 */

$this->breadcrumbs=array(
	'07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA'=>array('index'),
	$model->ID_T7=>array('view','id'=>$model->ID_T7),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Evaluaci�n', 'url'=>array('index')),
	array('label'=>'Nueva Evaluaci�n', 'url'=>array('create')),
	array('label'=>'Ver Evaluaci�n', 'url'=>array('view', 'id'=>$model->ID_T7)),
	array('label'=>'Administrar Evaluaci�n', 'url'=>array('admin')),
);
?>
<h1>Actualizar Evaluaci�n <?php echo $model->ID_T7; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
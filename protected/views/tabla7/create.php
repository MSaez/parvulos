<?php
/* @var $this Tabla7Controller */
/* @var $model Tabla7 */

$this->breadcrumbs=array(
	'07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluaci�n</h1>

<h3>07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
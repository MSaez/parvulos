<?php
/* @var $this Tabla7Controller */
/* @var $model Tabla7 */

$this->breadcrumbs=array(
	'07. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACIÓN VALÓRICA'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>07. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACIÓN VALÓRICA</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
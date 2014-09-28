<?php
/* @var $this Tabla6Controller */
/* @var $model Tabla6 */

$this->breadcrumbs=array(
	'06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
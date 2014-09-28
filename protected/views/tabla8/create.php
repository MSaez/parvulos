<?php
/* @var $this Tabla8Controller */
/* @var $model Tabla8 */

$this->breadcrumbs=array(
	'08. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: COMUNICACIÓN ORAL'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>08. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: COMUNICACIÓN ORAL</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
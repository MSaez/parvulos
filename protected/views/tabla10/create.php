<?php
/* @var $this Tabla10Controller */
/* @var $model Tabla10 */

$this->breadcrumbs=array(
	'10. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA ESCRITURA'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>10. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA ESCRITURA</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
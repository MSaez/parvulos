<?php
/* @var $this Tabla11Controller */
/* @var $model Tabla11 */

$this->breadcrumbs=array(
	'11. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: EXPRESIÓN CREATIVA'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>11. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: EXPRESIÓN CREATIVA</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
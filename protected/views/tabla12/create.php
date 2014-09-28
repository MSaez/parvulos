<?php
/* @var $this Tabla12Controller */
/* @var $model Tabla12 */

$this->breadcrumbs=array(
	'12. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: APRECIACIÓN ESTÉTICA'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>12. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: APRECIACIÓN ESTÉTICA</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
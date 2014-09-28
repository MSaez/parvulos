<?php
/* @var $this Tabla16Controller */
/* @var $model Tabla16 */

$this->breadcrumbs=array(
	'16. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: CUANTIFICACIÓN'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>16. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: CUANTIFICACIÓN</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
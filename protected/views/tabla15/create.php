<?php
/* @var $this Tabla15Controller */
/* @var $model Tabla15 */

$this->breadcrumbs=array(
	'15. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: RAZONAMIENTO LÓGICO-MATEMÁTICO'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>15. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: RAZONAMIENTO LÓGICO-MATEMÁTICO</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
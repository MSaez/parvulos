<?php
/* @var $this Tabla16Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'16. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: CUANTIFICACIÓN',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>16. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: CUANTIFICACIÓN</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

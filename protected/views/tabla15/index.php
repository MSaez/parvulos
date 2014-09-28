<?php
/* @var $this Tabla15Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'15. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: RAZONAMIENTO LÓGICO-MATEMÁTICO',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>15. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: RELACIONES LÓGICO-MATEMÁTICAS Y CUANTIFICACIÓN, EJE DE APRENDIZAJE: RAZONAMIENTO LÓGICO-MATEMÁTICO</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
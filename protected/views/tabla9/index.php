<?php
/* @var $this Tabla9Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'09. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA LECTURA',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>09. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJE VERBAL, EJE DE APRENDIZAJE: INICIACIÓN A LA LECTURA</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

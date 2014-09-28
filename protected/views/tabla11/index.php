<?php
/* @var $this Tabla11Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'11. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: EXPRESIÓN CREATIVA',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>11. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: EXPRESIÓN CREATIVA</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

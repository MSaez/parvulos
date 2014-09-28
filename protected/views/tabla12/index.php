<?php
/* @var $this Tabla12Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'12. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: APRECIACIÓN ESTÉTICA',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>12. ÁMBITO: COMUNICACIÓN, NÚCLEO: LENGUAJES ARTÍSTICOS, EJE DE APRENDIZAJE: APRECIACIÓN ESTÉTICA</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

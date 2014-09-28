<?php
/* @var $this Tabla7Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'07. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACIÓN VALÓRICA',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>07. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACIÓN VALÓRICA</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

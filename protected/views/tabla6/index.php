<?php
/* @var $this Tabla6Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

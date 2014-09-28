<?php
/* @var $this Tabla5Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'05. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y EXPRESIÓN DE SENTIMIENTOS',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>05. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y EXPRESIÓN DE SENTIMIENTOS</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

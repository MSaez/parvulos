<?php
/* @var $this Tabla2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'02. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: CUIDADO DE SÍ MISMO',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>02. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: CUIDADO DE SÍ MISMO</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

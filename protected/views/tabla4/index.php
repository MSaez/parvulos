<?php
/* @var $this Tabla4Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

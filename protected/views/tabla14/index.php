<?php
/* @var $this Tabla14Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'14. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: GRUPOS HUMANOS, SUS FORMAS DE VIDA Y ACONTECIMIENTOS RELEVANTES, EJE DE APRENDIZAJE: CONOCIMIENTO DEL ENTORNO SOCIAL',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>14. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: GRUPOS HUMANOS, SUS FORMAS DE VIDA Y ACONTECIMIENTOS RELEVANTES, EJE DE APRENDIZAJE: CONOCIMIENTO DEL ENTORNO SOCIAL</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

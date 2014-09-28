<?php
/* @var $this Tabla13Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL',
);

$this->menu=array(
	array('label'=>'Nueva Evaluación', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

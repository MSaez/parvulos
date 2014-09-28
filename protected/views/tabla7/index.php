<?php
/* @var $this Tabla7Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA',
);

$this->menu=array(
	array('label'=>'Nueva Evaluaci�n', 'url'=>array('create')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Evaluaciones</h1>

<h5>07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA</h5>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

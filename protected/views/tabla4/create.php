<?php
/* @var $this Tabla4Controller */
/* @var $model Tabla4 */

$this->breadcrumbs=array(
	'04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
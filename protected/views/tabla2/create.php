<?php
/* @var $this Tabla2Controller */
/* @var $model Tabla2 */

$this->breadcrumbs=array(
	'02. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: CUIDADO DE SÍ MISMO'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>02. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: CUIDADO DE SÍ MISMO</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
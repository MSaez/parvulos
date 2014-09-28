<?php
/* @var $this Tabla5Controller */
/* @var $model Tabla5 */

$this->breadcrumbs=array(
	'05. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y EXPRESIÓN DE SENTIMIENTOS'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>05. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y EXPRESIÓN DE SENTIMIENTOS</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
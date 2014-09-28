<?php
/* @var $this Tabla3Controller */
/* @var $model Tabla3 */

$this->breadcrumbs=array(
	'03. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: INDEPENDENCIA'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>03. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: INDEPENDENCIA</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
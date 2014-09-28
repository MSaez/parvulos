<?php
/* @var $this Tabla14Controller */
/* @var $model Tabla14 */

$this->breadcrumbs=array(
	'14. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: GRUPOS HUMANOS, SUS FORMAS DE VIDA Y ACONTECIMIENTOS RELEVANTES, EJE DE APRENDIZAJE: CONOCIMIENTO DEL ENTORNO SOCIAL'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>14. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: GRUPOS HUMANOS, SUS FORMAS DE VIDA Y ACONTECIMIENTOS RELEVANTES, EJE DE APRENDIZAJE: CONOCIMIENTO DEL ENTORNO SOCIAL</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
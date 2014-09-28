<?php
/* @var $this Tabla13Controller */
/* @var $model Tabla13 */

$this->breadcrumbs=array(
	'13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL'=>array('index'),
	'Nuevo',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Administrar Evaluaciones', 'url'=>array('admin')),
);
?>

<h1>Nueva Evaluación</h1>

<h3>13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
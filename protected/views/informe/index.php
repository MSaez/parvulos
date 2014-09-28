<?php
/* @var $this InformeController */

$this->breadcrumbs=array(
	'Informe',
);
?>
<h1>Informe.</h1>

<p>
	Seleccione el alumno del cual se obtendrá el informe.
</p>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

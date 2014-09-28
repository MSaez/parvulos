<?php
/* @var $this Tabla13Controller */
/* @var $model Tabla13 */

$this->breadcrumbs=array(
	'13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva  Evaluación', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tabla13-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Evaluaciones</h1>

<p>
	<h5>13. ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL, NÚCLEO: SERES VIVOS Y SU ENTORNO, EJE DE APRENDIZAJE: DESCUBRIMIENTO DEL MUNDO NATURAL</h5>
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tabla13-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_T13',
		'ID_CURSA',
		array('name'=>'RUT_A', 
              'header'=>'Alumno',
              'value'=>'$data->rUTA->NOMBRE_A." ".$data->rUTA->APELLIDO_A'),
		'ANIO_C',
		'E1',
		'E2',
		'E3',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

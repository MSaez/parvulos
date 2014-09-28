<?php
/* @var $this Tabla1Controller */
/* @var $model Tabla1 */

$this->breadcrumbs=array(
	'01. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: MOTRICIDAD'=>array('index'),
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
	$('#tabla1-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Evaluaciones</h1>

<p>
<h5>01. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: AUTONOMÍA, EJE DE APRENDIZAJE: MOTRICIDAD</h5>
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tabla1-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_T1',
		'ID_cursa',
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

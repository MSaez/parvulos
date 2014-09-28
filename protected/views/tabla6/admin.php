<?php
/* @var $this Tabla6Controller */
/* @var $model Tabla6 */

$this->breadcrumbs=array(
	'06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL'=>array('index'),
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
	$('#tabla6-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Evaluaciones</h1>

<p>
	<h5>06. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: CONVIVENCIA, EJE DE APRENDIZAJE: INTERACCIÓN SOCIAL</h5>
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tabla6-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_T6',
		'ID_CURSA',
		array('name'=>'RUT_A', 
              'header'=>'Alumno',
              'value'=>'$data->rUTA->NOMBRE_A." ".$data->rUTA->APELLIDO_A'),
		'ANIO_C',
		'A1_E1',
		'A1_E2',
		'E1',
		'E2',
		'E3',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

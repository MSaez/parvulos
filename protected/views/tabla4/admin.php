<?php
/* @var $this Tabla4Controller */
/* @var $model Tabla4 */

$this->breadcrumbs=array(
	'04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO'=>array('index'),
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
	$('#tabla4-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Evaluaciones</h1>

<p>
	<h5>04. ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL, NÚCLEO: IDENTIDAD, EJE DE APRENDIZAJE: RECONOCIMIENTO Y APRECIO DE SÍ MISMO</h5>
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tabla4-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_T4',
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

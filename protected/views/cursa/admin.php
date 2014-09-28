<?php
/* @var $this CursaController */
/* @var $model Cursa */

$this->breadcrumbs=array(
	'Asignaciones de curso'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de curso', 'url'=>array('index')),
	array('label'=>'Nueva Asignación de curso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cursa-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Asignaciones de curso</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cursa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		array('name'=>'RUT_A', 
              'header'=>'Alumno',
              'value'=>'$data->rUTA->NOMBRE_A." ".$data->rUTA->APELLIDO_A'),
		array('name'=>'RUT_A', 
              'header'=>'RUT',
              'value'=>'$data->RUT_A'),
		array('name'=>'ID_C', 
              'header'=>'Curso',
              'value'=>'$data->iDC->NOMBRE_C'),
		'ANIO_C',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
/* @var $this ImparteController */
/* @var $model Imparte */

$this->breadcrumbs=array(
	'Asignaciones de profesor'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Asignaciones de profesor', 'url'=>array('index')),
	array('label'=>'Nueva Asignación de profesor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#imparte-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Asignaciones de profesor</h1>

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
	'id'=>'imparte-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'RUT_P', 
              'header'=>'Profesor',
              'value'=>'$data->rUTP->NOMBRE_P." ".$data->rUTP->APELLIDO_P'),
		array('name'=>'ID_C', 
              'header'=>'Curso',
              'value'=>'$data->iDC->NOMBRE_C'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

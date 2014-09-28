<?php
/* @var $this Tabla7Controller */
/* @var $model Tabla7 */

$this->breadcrumbs=array(
	'07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Evaluaciones', 'url'=>array('index')),
	array('label'=>'Nueva  Evaluaci�n', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tabla7-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Evaluaciones</h1>

<p>
	<h5>07. �MBITO: FORMACI�N PERSONAL Y SOCIAL, N�CLEO: CONVIVENCIA, EJE DE APRENDIZAJE: FORMACI�N VAL�RICA</h5>
</p>

<?php echo CHtml::link('B�squeda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tabla7-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_T7',
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

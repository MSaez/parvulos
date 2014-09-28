<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Profesores', 'url'=>array('index')),
	array('label'=>'Nuevo Profesor', 'url'=>array('create')),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



<h1>Administrar Profesores</h1>



<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profesor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RUT_P',
		'NOMBRE_P',
		'APELLIDO_P',
		'TIPO_P',
		'PASS',
		array(
            'class'=>'CButtonColumn',
                    'template' => '{view} {update} {delete} {asignarRol} {eliminarRol}',
                'buttons'=>array(
                        'asignarRol' => array(
                                'label'=>'Asignar Rol', 
                                'url'=>"CHtml::normalizeUrl(array('asignarRol', 'id'=>\$data->RUT_P))",
                                'imageUrl'=>'images/autorizar.gif',
                                'options' => array('class'=>'asignarRol'),
                        ),
						'eliminarRol' => array(
                                'label'=>'Eliminar Rol', 
                                'url'=>"CHtml::normalizeUrl(array('eliminarRol', 'id'=>\$data->RUT_P))",
                                'imageUrl'=>'images/denegar.png',
                                'options' => array('class'=>'eliminarRol'),
                        ),
                ),
        ),
	),
)); ?>


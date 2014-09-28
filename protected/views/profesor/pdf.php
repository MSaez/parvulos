<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profesor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RUT_P',
		'NOMBRE_P',
		'APELLIDO_P',
		'TIPO_P',
		'PASS',),)); 
		
		$html->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profesor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'RUT_P',
		'NOMBRE_P',
		'APELLIDO_P',
		'TIPO_P',
		'PASS',),)); 

	
?>




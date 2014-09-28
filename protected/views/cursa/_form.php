<?php
/* @var $this CursaController */
/* @var $model Cursa */
/* @var $form CActiveForm */
?>

<script>
  $(function() {    
    $( "#anim" ).change(function() {
      $( "#datepicker" ).datepicker( "option", "showAnim", $( this ).val() );
    });
  });
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cursa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'RUT_A'); ?>
		<?php echo $form->dropDownList($model,'RUT_A',CHtml::listData(Alumno::model()->findAll(),"RUT_A","fullname"),array('prompt'=>'Seleccione...'));?> 
		<?php echo $form->error($model,'RUT_A'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_C'); ?>
		<?php echo $form->dropDownList($model,'ID_C',CHtml::listData(Curso::model()->findAll(),"ID_C","NOMBRE_C"),array('prompt'=>'Seleccione...'));?> 
		<?php echo $form->error($model,'ID_C'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANIO_C'); ?>
		<?php
        
        $this->widget('zii.widgets.jui.CJuiDatePicker',array(
        'name'=>'ANIO_C',
        'language' => 'es',
        'model'=>$model,
        'attribute'=>'ANIO_C',
        'value'=>$model->ANIO_C,
        // additional javascript options for the date picker plugin
        'options'=>array(
        'dateFormat'=>'yy',
        'minDate'=>0,
        'showAnim'=>'drop',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        ),
        'htmlOptions'=>array(
            'style'=>'height:20px;',
            'placeholder' => '2014-12-31'
         ),
    ));
    ?>
		<?php echo $form->error($model,'ANIO_C'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
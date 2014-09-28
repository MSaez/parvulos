<?php
/* @var $this InformeController */
/* @var $model CertificadoForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'certificado-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // See class documentation of CActiveForm for details on this,
    // you need to use the performAjaxValidation()-method described there.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
	
	
	
	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php $datos = CHtml::listData(Cursa::model()->findAllByAttributes(array('ANIO_C'=>date('Y'))),"ID","fullname");  ?>
		<?php echo $form->labelEx($model,'RUT_A'); ?>
		<?php echo $form->dropDownList($model,'cursa',$datos,array('empty' => 'Seleccione...'));?>
		<?php echo $form->error($model,'cursa'); ?>
	</div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Generar'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
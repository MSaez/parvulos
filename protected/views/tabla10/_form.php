<?php
/* @var $this Tabla10Controller */
/* @var $model Tabla10 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tabla10-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php $datos = CHtml::listData(Cursa::model()->findAllByAttributes(array('ANIO_C'=>date('Y'))),"ID","fullname");  ?>
		<?php echo $form->labelEx($model,'RUT_A'); ?>
		<?php echo $form->dropDownList($model,'ID_CURSA',$datos,array('prompt'=>'Seleccione...', 'value'=>null));?>
		<?php echo $form->error($model,'ID_CURSA'); ?>
	</div>

	<table>
		<tr>
			<td width="3px">
				<h5>Nivel</h5>
			</td>
			<td width="500px">
				<h5>Indicadores</h5>
			</td>
			<td>
				<h5>Evaluación 1</h5>				
			</td>
			<td>
				<h5>Evaluación 2</h5>
			</td>
			<td>
				<h5>Evaluación 3</h5>
			</td>
		</tr>
		<tr>
			<td width="3px">
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td width="500px">
				<h5>Traza arabescos libres y líneas onduladas en contextos significativos. Por ejemplo, crea un mapa para encontrar un tesoro.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A1_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A1_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A1_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A1_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A1_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A1_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td width="5px">
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td>
				<h5>“Juega a escribir” una carta, con signos propios.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A2_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A2_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A2_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A2_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A2_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A2_E3'); ?>
				</div>
			</td>
		</tr>
 
		<tr>
			<td width="5px">
				<h5><span class="required">NT1 </span></h5>
			</td>
			<td>
				<h5>Traza guirnaldas de líneas continuas, respetando un punto de inicio y final.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A3_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A3_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A3_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A3_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A3_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A3_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required">NT1 </span></h5>
			</td>
			<td>
				<h5>“Escribe” una carta o invitación incluyendo algunas letras o palabras que conoce. Por ejemplo, firma una carta con su nombre o escribe algunas letras que componen el nombre del destinatario de una invitación.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A4_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A4_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A4_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A4_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A4_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A4_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required"> NT2 </span></h5>
			</td>
			<td>
				<h5>Juega a escribir en forma manuscrita, trazando guirnaldas sin levantar el lápiz.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A5_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A5_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A5_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A5_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A5_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A5_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required"> NT2 </span></h5>
			</td>
			<td>
				<h5>“Escribe” una carta o invitación, incluyendo letras o palabras que conoce y respetando la direccionalidad y distancia.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A6_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A6_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A6_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A6_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A6_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A6_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required"> 1° </span></h5>
			</td>
			<td>
				<h5>Copia algunas palabras familiares, como nombres de animales y objetos de uso frecuente.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A7_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A7_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A7_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A7_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A7_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A7_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required"> 1° </span></h5>
			</td>
			<td>
				<h5>“Escribe” una carta o invitación, incluyendo en ella palabras de no más de dos sílabas en letra cursiva ligada. Por ejemplo, papá, mono.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A8_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A8_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A8_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A8_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A8_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A8_E3'); ?>
				</div>
			</td>
		</tr>
	</table>



	<div class="row buttons">
		<center>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Nuevo' : 'Guardar'); ?>
		</center>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
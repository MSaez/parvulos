<?php
/* @var $this Tabla9Controller */
/* @var $model Tabla9 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tabla9-form',
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
				<h5>Señala la sílaba final de una palabra escrita.</h5>
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
				<h5>Nombra el producto o empresa que representa un logo.</h5>
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
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td>
				<h5>Frente a su nombre u otras palabras escritas que conoce, indica o señala dos letras (vocales o consonantes).</h5>
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
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td>
				<h5>Comenta las acciones que más le gustaron de un cuento.</h5>
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
				<h5><span class="required"> NT1 </span></h5>
			</td>
			<td>
				<h5>Nombra o señala palabras escritas que terminan con la misma sílaba.</h5>
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
				<h5><span class="required"> NT1 </span></h5>
			</td>
			<td>
				<h5>Señala y menciona su nombre y al menos tres palabras escritas que tienen significado para él o ella.</h5>
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
				<h5><span class="required"> NT1 </span></h5>
			</td>
			<td>
				<h5>Indica o señala en un texto algunas letras (vocales y consonantes) escritas.</h5>
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
				<h5><span class="required"> NT1 </span></h5>
			</td>
			<td>
				<h5>Responde preguntas respecto a personajes o hechos de un cuento.</h5>
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

		<tr>
			<td>
				<h5><span class="required"> NT2 </span></h5>
			</td>
			<td>
				<h5>Frente a palabras escritas, señala si son largas, cortas o iguales, de acuerdo a su número de sílabas, e indica aquellas que tienen la misma sílaba inicial.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A9_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A9_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A9_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A9_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A9_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A9_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required">  NT2  </span></h5>
			</td>
			<td>
				<h5>Indica y menciona al menos seis palabras escritas que son propias de su entorno. Por ejemplo, nombres de sus amigos, amigas, familiares o marcas de productos conocidos.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A10_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A10_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A10_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A10_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A10_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A10_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required">  NT2  </span></h5>
			</td>
			<td>
				<h5>Nombra algunas letras mayúsculas y minúsculas de un texto significativo simple.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A11_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A11_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A11_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A11_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A11_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A11_E3'); ?>
				</div>
			</td>
		</tr>

		<tr>
			<td>
				<h5><span class="required">  NT2  </span></h5>
			</td>
			<td>
				<h5>Infiere el final de un cuento. Por ejemplo, ¿qué habrá pasado con la jirafa y sus amigos?</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A12_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A12_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A12_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A12_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A12_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A12_E3'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Frente a palabras escritas, señala aquellas que tienen igual sílaba intermedia.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A13_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A13_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A13_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A13_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A13_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A13_E3'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Indica y menciona 25 palabras escritas conocidas, propias de su entorno.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A14_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A14_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A14_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A14_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A14_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A14_E3'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Indica o señala en un texto todas las letras del alfabeto.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A15_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A15_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A15_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A15_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A15_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A15_E3'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Cuenta con sus propias palabras un cuento e infiere un final diferente.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A16_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A16_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A16_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A16_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A16_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A16_E3'); ?>
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
<?php
/* @var $this Tabla11Controller */
/* @var $model Tabla11 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tabla11-form',
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
				<h5>Reproduce movimientos corporales sencillos. Por ejemplo, sube y baja los brazos o se desplaza hacia adelante y atrás.</h5>
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
				<h5>Sigue libremente el ritmo de una canción con aplausos, instrumentos musicales u otro recurso sonoro.</h5>
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
				<h5>Dibuja figuras y trazos intencionados, indicando qué representan sus creaciones. Por ejemplo, “este es el sol”, “esta es mi mamá”.</h5>
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
				<h5>Entona canciones en voz alta.</h5>
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
				<h5>Representa corporalmente algunas acciones o características de personas o elementos de su entorno. Por ejemplo, imita un avión, un vendedor o un conejo.</h5>
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
				<h5>Percute el ritmo al entonar canciones infantiles simples, siguiendo el ejemplo dado por la(el) educadora(or).</h5>
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
				<h5>Dibuja o modela figuras humanas o animales, considerando partes del cuerpo. Por ejemplo, cabeza, pies, tronco, manos, ojos, etc.</h5>
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
				<h5>Entona canciones y acompaña su canto con algunos recursos como instrumentos musicales, objetos o partes del cuerpo. Por ejemplo, pies o palmas.</h5>
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
				<h5>Reproduce corporalmente un relato o canción a través de la mímica y/o la dramatización.</h5>
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
				<h5>Percute el ritmo al entonar canciones infantiles.</h5>
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
				<h5>Dibuja o modela figuras humanas o animales, incorporando detalles físicos. Por ejemplo, pestañas, cejas, dedos, ropa con botones.</h5>
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
				<h5>Canta inventando una nueva letra o texto simple a una melodía conocida.</h5>
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
				<h5>Representar corporalmente un cuento, asumiendo un rol determinado.</h5>
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
				<h5>Percute el ritmo al entonar canciones folklóricas simples.</h5>
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
				<h5>Representa su entorno en el plano y en el volumen mediante diversas técnicas y materiales. Por ejemplo, pinta la escuela con témpera (plano), modela la cancha del barrio en greda (volumen).</h5>
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
				<h5>Entona una canción y se mueve con coordinación rítmica.</h5>
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
<?php
/* @var $this Tabla15Controller */
/* @var $model Tabla15 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tabla15-form',
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
				<h5>Pone un objeto: dentro o fuera, encima o debajo, cerca o lejos, de acuerdo a un punto de referencia dado.</h5>
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
			<td width="3px">
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td width="500px">
				<h5>Agrupa elementos con una característica común y ordena 3 elementos de acuerdo a su tamaño.</h5>
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
				<h5>Indica o nombra el elemento que posee una característica distinta dentro de un conjunto. Por ejemplo, dentro de un conjunto de gatos con sombrero, indica el gato sin sombrero.</h5>
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
			<td width="5px">
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td>
				<h5>Sigue instrucciones que involucran los conceptos “antes” y “después” o lo que es “primero” y lo que “sigue”. Por ejemplo, lo primero es lavarse las manos y lo que sigue es secárselas.</h5>
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
				<h5><span class="required"> &lt;NT1 </span></h5>
			</td>
			<td>
				<h5>Frente a una dificultad, indica explícitamente cuál es el problema.</h5>
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
				<h5>Dice si un objeto está dentro o fuera, adelante o atrás, y cerca o lejos, de acuerdo a un punto concreto de referencia.</h5>
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
				<h5>Agrupa elementos con 2 características comunes y ordena al menos 4 elementos de acuerdo a su longitud, sin ensayo y error.</h5>
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
				<h5>Continúa un patrón formado por un objeto que cambia en una de sus características. Por ejemplo, hace brochetas con patrones de frutas, ordenando una uva verde y luego una morada.</h5>
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
				<h5><span class="required"> NT1 </span></h5>
			</td>
			<td>
				<h5>Menciona los conceptos de orientación espacial “hoy” y “mañana” y, los conceptos de frecuencia “siempre”, “a veces”, “nunca”, de acuerdo a la temporalidad de las situaciones.</h5>
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
				<h5><span class="required"> NT1 </span></h5>
			</td>
			<td>
				<h5>Nombra los pasos o acciones que realizó para resolver un problema práctico.</h5>
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
				<h5><span class="required"> NT2 </span></h5>
			</td>
			<td>
				<h5>Muestra su mano izquierda y derecha, según solicitud.</h5>
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
				<h5><span class="required"> NT2 </span></h5>
			</td>
			<td>
				<h5>Agrupa elementos con 3 características comunes y ordena al menos 5 elementos sin ensayo y error.</h5>
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
				<h5><span class="required">  NT2  </span></h5>
			</td>
			<td>
				<h5>Continúa un patrón formado por un objeto que cambia en una de sus características. Por ejemplo, hace brochetas con patrones de frutas, ordenando una uva verde y luego una morada.</h5>
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
				<h5><span class="required">  NT2  </span></h5>
			</td>
			<td>
				<h5>Menciona los conceptos de orientación espacial “hoy” y “mañana” y, los conceptos de frecuencia “siempre”, “a veces”, “nunca”, de acuerdo a la temporalidad de las situaciones.</h5>
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
				<h5><span class="required">  NT2  </span></h5>
			</td>
			<td>
				<h5>Resuelve un problema práctico, mencionando con anticipación una alternativa de solución.</h5>
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
				<h5>Describe posiciones de objetos desde diferentes puntos de observación. Por ejemplo, la pelota está cerca del árbol, pero lejos del arco.</h5>
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
		
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Ordena de mayor a menor 6 números, entre el 0 y el 30. Por ejemplo, 14, 15, 16, 17, 18 y 19.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A17_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A17_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A17_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A17_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A17_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A17_E3'); ?>
				</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Crea un patrón formado por un objeto, que cambia en 3 características. Por ejemplo, triángulo grande y pequeño, rojo y verde, “de pie y de cabeza”.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A18_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A18_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A18_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A18_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A18_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A18_E3'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Menciona el orden temporal en que ocurren tres hechos significativos durante el año, utilizando un calendario. Por ejemplo, su cumpleaños, vacaciones de invierno y la navidad.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A19_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A19_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A19_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A19_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A19_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A19_E3'); ?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<h5><span class="required">  1°  </span></h5>
			</td>
			<td>
				<h5>Frente a una situación dada, describe el problema con sus propias palabras y propone dos alternativas de solución.</h5>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A20_E1', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A20_E1'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A20_E2', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A20_E2'); ?>
				</div>
			</td>
			<td>
				<div class="row">
					<?php echo $form->dropDownList($model,'A20_E3', array('L'=>'Logrado','0'=>'No Logrado',null=>'Ingresar'));?>
					<?php echo $form->error($model,'A120_E3'); ?>
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
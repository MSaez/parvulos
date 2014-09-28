<?php
/* @var $this Tabla3Controller */
/* @var $model Tabla3 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tabla3-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Todoos los campos son obligatorios.</p>
	
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
				<h5>Menciona cuando necesita ayuda para realizar un trabajo. Por ejemplo, comenta que necesita ayuda para alcanzar el material que le falta.</h5>
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
				<h5>Solicita participar en situaciones o actividades nuevas que se le presentan. Por ejemplo, bailes y juegos colectivos.</h5>
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
				<h5>Busca los materiales y pide ayuda a otro niño, niña o adulto cuando lo necesita para finalizar sus actividades o proyectos.</h5>
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
				<h5>Propone a sus compañeros(as) participar de algún juego de su interés.</h5>
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
				<h5>Finaliza sus trabajos y comenta el modo en que solucionó los problemas que se le presentaron, cuando se le pregunta.</h5>
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
				<h5>Sugiere actividades a otros niños y niñas y da ideas para organizarlos. Por ejemplo, invita a sus amigos(as) a jugar a la escondida e indica que él los buscará primero.</h5>
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
				<h5>Finaliza sus trabajos y soluciona problemas simples sin recurrir constantemente al educador(a).</h5>
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
				<h5>Propone ideas para organizar roles y materiales en diferentes actividades y juegos.</h5>
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
<?php

class InformeController extends Controller
{
	//public $layout='//layouts/column2';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}


	public function accessRules()
	{
		return array(
			array('allow',  //Permite todas a las acciones a las cuentas de tipo PROFESOR
				'actions'=>array('index'),
				'roles'=>array('PROFESOR'),
			),
			array('allow',  //Permite todas a las acciones a las cuentas de tipo ADMINISTRADOR
				'actions'=>array('index'),
				'roles'=>array('ADMINISTRADOR'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$model = new CertificadoForm;
		$alumno = new Alumno;
		$profesor = new Profesor;
		$curso = new Curso;
		$cursa = new Cursa;
		$imparte = new Imparte;
		$t01 = new Tabla1;
		$t02 = new Tabla2;
		$t03 = new Tabla3;
		$t04 = new Tabla4;
		$t05 = new Tabla5;
		$t06 = new Tabla6;
		$t07 = new Tabla7;
		$t08 = new Tabla8;
		$t09 = new Tabla9;
		$t10 = new Tabla10;
		$t11 = new Tabla11;
		$t12 = new Tabla12;
		$t13 = new Tabla13;
		$t14 = new Tabla14;
		$t15 = new Tabla15;
		$t16 = new Tabla16;
		
		if(isset($_POST['CertificadoForm'])){
				$model->attributes=$_POST['CertificadoForm'];
				if ($model->cursa == null){
					$model->validate();
				}
				$cursa = Cursa::model()->findByPk($model->cursa);
				if ($cursa != null){
					$alumno = Alumno::model()->findByPk($cursa->RUT_A);
					$curso = Curso::model()->findByPk($cursa->ID_C);
					$imparte = Imparte::model()->findByAttributes(array('ID_C'=>$cursa->ID_C));
					$t01 = Tabla1::model()->findByAttributes(array('ID_cursa'=>$model->cursa));
					$t02 = Tabla2::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t03 = Tabla3::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t04 = Tabla4::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t05 = Tabla5::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t06 = Tabla6::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t07 = Tabla7::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t08 = Tabla8::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t09 = Tabla9::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t10 = Tabla10::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t11 = Tabla11::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t12 = Tabla12::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t13 = Tabla13::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t14 = Tabla14::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t15 = Tabla15::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
					$t16 = Tabla16::model()->findByAttributes(array('ID_CURSA'=>$model->cursa));
				}
				if ($imparte != null){
					$profesor = Profesor::model()->findByPk($imparte->RUT_P);}
				
				
				//EUserFlash::setSuccessMessage($model->cursa);
					
				$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');
				
				$html=' 
						<table>
							<tr>
								<td>
									<img align="left" src="images/cnj.jpg"/>
								</td>
								<td>
									<p align="left" style="line-height: 0%"><strong>COLEGIO NIÑO JESÚS LOTA - '.date("Y").'</strong></p>
									<p align="left" style="line-height: 0%"><strong>Educadora: '.$profesor->NOMBRE_P.' '.$profesor->APELLIDO_P.'</strong></p>
									<p align="left" style="line-height: 0%"><strong>Curso: '.$curso->NOMBRE_C.'</strong></p>
									<p align="left" style="line-height: 0%"><strong>Alumno(a): '.$alumno->NOMBRE_A.' '.$alumno->APELLIDO_A.'</strong></p>
								</td>
							</tr>
						</table>
							

						<p align="center"><h2>ÁMBITO: FORMACIÓN PERSONAL Y SOCIAL</h2></p>
						
						<table align="center" border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
							<tr>
								<td width="350"  align="center"><strong>Eje de aprendizaje</strong> </td><td align="center"><strong>Evaluación 1</strong></td><td align="center"><strong>Evalucación 2</strong></td><td align="center"><strong>Evaluación 3</strong></td>
							</tr>
							<tr>
								<td align="center">Motricidad</td><td align="center">'.$t01->E1.'</td><td align="center">'.$t01->E2.'</td><td align="center">'.$t01->E3.'</td>
							</tr>
							<tr>
								<td align="center">Cuidado de sí mismo</td><td align="center">'.$t02->E1.'</td><td align="center">'.$t02->E2.'</td><td align="center">'.$t02->E3.'</td>
							</tr>
							<tr>
								<td align="center">Independencia</td><td align="center">'.$t03->E1.'</td><td align="center">'.$t03->E2.'</td><td align="center">'.$t03->E3.'</td>
							</tr>
							<tr>
								<td align="center">Reconocimiento y aprecio de sí mismo</td><td align="center">'.$t04->E1.'</td><td align="center">'.$t04->E2.'</td><td align="center"al>'.$t04->E3.'</td>
							</tr>
							<tr>
								<td align="center">Reconocimiento y expresión de sentimientos</td><td align="center">'.$t05->E1.'</td><td align="center">'.$t05->E2.'</td><td align="center"al>'.$t05->E3.'</td>
							</tr>
							<tr>
								<td align="center">Interacción social</td><td align="center">'.$t06->E1.'</td><td align="center">'.$t06->E2.'</td><td align="center">'.$t06->E3.'</td>
							</tr>
							<tr>
								<td align="center">Formación valórica</td><td align="center">'.$t07->E1.'</td><td align="center">'.$t07->E2.'</td><td align="center">'.$t07->E3.'</td>
							</tr>
						</table>

						<p align="center"><h2>ÁMBITO: COMUNICACIÓN</h2></p>
						<table align="center" border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
							<tr>
								<td width="350"  align="center"><strong>Eje de aprendizaje</strong> </td><td align="center"><strong>Evaluación 1</strong></td><td align="center"><strong>Evalucación 2</strong></td><td align="center"><strong>Evaluación 3</strong></td>
							</tr>
							<tr>
								<td align="center">Comunicación oral</td><td align="center">'.$t08->E1.'</td><td align="center">'.$t08->E2.'</td><td align="center">'.$t08->E3.'</td>
							</tr>
							<tr>
								<td align="center">Iniciación a la lectura</td><td align="center">'.$t09->E1.'</td><td align="center">'.$t09->E2.'</td><td align="center">'.$t09->E3.'</td>
							</tr>
							<tr>
								<td align="center">Iniciación a la escritura</td><td align="center">'.$t10->E1.'</td><td align="center">'.$t10->E2.'</td><td align="center">'.$t10->E3.'</td>
							</tr>
							<tr>
								<td align="center">Expresión creativa</td><td align="center">'.$t11->E1.'</td><td align="center">'.$t11->E2.'</td><td align="center">'.$t11->E3.'</td>
							</tr>
							<tr>
								<td align="center">Apreciación estética</td><td align="center">'.$t12->E1.'</td><td align="center">'.$t12->E2.'</td><td align="center">'.$t12->E3.'</td>
							</tr>
						</table>

						<p align="center"><h2>ÁMBITO: RELACIÓN CON EL MEDIO NATURAL Y CULTURAL</h2></p>
						<table align="center" border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
							<tr>
								<td width="350"  align="center"><strong>Eje de aprendizaje</strong> </td><td align="center"><strong>Evaluación 1</strong></td><td align="center"><strong>Evalucación 2</strong></td><td align="center"><strong>Evaluación 3</strong></td>
							</tr>
							<tr>
								<td align="center">Descubrimiento del mundo natural</td><td align="center">'.$t13->E1.'</td><td align="center">'.$t13->E2.'</td><td align="center">'.$t13->E3.'</td>
							</tr>
							<tr>
								<td align="center">Conocimiento del entorno social</td><td align="center">'.$t14->E1.'</td><td align="center">'.$t14->E2.'</td><td align="center">'.$t14->E3.'</td>
							</tr>
							<tr>
								<td align="center">Razonamiento lógico - matemático</td><td align="center">'.$t15->E1.'</td><td align="center">'.$t15->E2.'</td><td align="center">'.$t15->E3.'</td>
							</tr>
							<tr>
								<td align="center">Cuantificación</td><td align="center">'.$t16->E1.'</td><td align="center">'.$t16->E2.'</td><td align="center">'.$t16->E3.'</td>
							</tr>
						</table>
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<br />
						<table align="center">
							<tr><td>________________________________</td></tr>
							<tr><td align="center">'.$profesor->NOMBRE_P.' '.$profesor->APELLIDO_P.'<br />Educadora</td></tr>
						</table>
						<br />
						<br />

						<table align="center">
							<tr><td>________________________________</td><td  width="50">&nbsp;</td><td>________________________________</td></tr>
							<tr><td align="center">Hermana Lilian Morales Vidal<br />Dirección</td><td  width="50">&nbsp;</td><td align="center">Veronica Flores Palacios <br />Evaluadora</td></td>
						</table>';
				
				$mpdf=new mPDF('win-1252','LEGAL','','',15,15,15,15,5,7);
				$mpdf->WriteHTML($html);
				$mpdf->Output('certificado  ('.$alumno->NOMBRE_A.') - '.$alumno->APELLIDO_A.' '.$cursa->ANIO_C.' '.$curso->NOMBRE_C.'.pdf','D');
				exit;
				
				
		}
		
		$this->render('index',array('model'=>$model));
	}

	
}
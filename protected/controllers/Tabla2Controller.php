<?php

class Tabla2Controller extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  //Permite todas a las acciones a las cuentas de tipo PROFESOR
				'actions'=>array('index','view','create','update','admin','delete'),
				'roles'=>array('PROFESOR'),
			),
			array('allow',  //Permite todas a las acciones a las cuentas de tipo ADMINISTRADOR
				'actions'=>array('index','view','create','update','admin','delete'),
				'roles'=>array('ADMINISTRADOR'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Tabla2;
		$alumno = new Alumno;
		$cursa = new Cursa;
		
		
		$lv1=" ";
		$lv2=" ";
		$lv3=" ";
		
		$L1_1 = 0; // Determina si con los 3 indicadores pasa <NT1 para la evaluacion 1
		$L2_1 = 0; // Determina si con los 3 indicadores pasa NT1 para la evaluacion 1
		$L3_1 = 0; // Determina si con los 3 indicadores pasa NT2 para la evaluacion 1
		$L4_1 = 0; // Determina si con los 3 indicadores pasa EG1 para la evaluacion 1
		$L1_2 = 0; // Determina si con los 3 indicadores pasa <NT1 para la evaluacion 2
		$L2_2 = 0; // Determina si con los 3 indicadores pasa NT1 para la evaluacion 2
		$L3_2 = 0; // Determina si con los 3 indicadores pasa NT2 para la evaluacion 2
		$L4_2 = 0; // Determina si con los 3 indicadores pasa EG1 para la evaluacion 2
		$L1_3 = 0; // Determina si con los 3 indicadores pasa <NT1 para la evaluacion 3
		$L2_3 = 0; // Determina si con los 3 indicadores pasa NT1 para la evaluacion 3
		$L3_3 = 0; // Determina si con los 3 indicadores pasa NT2 para la evaluacion 3
		$L4_3 = 0; // Determina si con los 3 indicadores pasa EG1 para la evaluacion 3

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tabla2']))
		{
			$model->attributes=$_POST['Tabla2'];
			
			$cursa = Cursa::model()->findByPk($model->ID_CURSA);
			if ($cursa != null)
				$alumno = Alumno::model()->findByPk($cursa->RUT_A);
			
			// evaluacion 1
			// determinacion de logro <NT1 para evaluacion 1
			if(($model->A1_E1=='L') && ($model->A2_E1=='L'))
			{
				$L1_1=1;
			}
			else
			{
				$L1_1=0;
			}

			// determinacion de logro NT1 para evaluacion 1
			if(($model->A3_E1=='L') && ($model->A4_E1=='L'))
			{
				$L2_1=1;
			}
			else
			{
				$L2_1=0;
			}

			// determinacion de logro NT2 para evaluacion 1
			if(($model->A5_E1=='L') && ($model->A6_E1=='L'))
			{
				$L3_1=1;
			}
			else
			{
				$L3_1=0;
			}

			// determinacion de logro EG1 para evaluacion 1
			if(($model->A7_E1=='L') && ($model->A8_E1=='L'))
			{
				$L4_1=1;
			}
			else
			{
				$L4_1=0;  
			}

			// calculamos el nivel de logro de la evaluaci�n 1

			if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 0) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 1))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 1) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="NT2";
			}
			else if (($L1_1 == 1) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="EG1";
			}


			// evaluacion 2
			// determinacion de logro <NT1 para evaluacion 2
			if(($model->A1_E2=='L') && ($model->A2_E2=='L'))
			{
				$L1_2=1;
			}
			else
			{
				$L1_2=0;
			}

			// determinacion de logro NT1 para evaluacion 2
			if(($model->A3_E2=='L') && ($model->A4_E2=='L'))
			{
				$L2_2=1;
			}
			else
			{
				$L2_2=0;
			}

			// determinacion de logro NT2 para evaluacion 2
			if(($model->A5_E2=='L') && ($model->A6_E2=='L'))
			{
				$L3_2=1;
			}
			else
			{
				$L3_2=0;
			}

			// determinacion de logro EG1 para evaluacion 2
			if(($model->A7_E2=='L') && ($model->A8_E2=='L'))
			{
				$L4_2=1;
			}
			else
			{
				$L4_2=0;  
			}

			// calculamos el nivel de logro de la evaluaci�n 2

			if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 0) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 1))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 1) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="NT2";
			}
			else if (($L1_2 == 1) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="EG1";
			}


			// evaluacion 3
			// determinacion de logro <NT1 para evaluacion 3
			if(($model->A1_E3=='L') && ($model->A2_E3=='L'))
			{
				$L1_3=1;
			}
			else
			{
				$L1_3=0;
			}

			// determinacion de logro NT1 para evaluacion 3
			if(($model->A3_E3=='L') && ($model->A4_E3=='L'))
			{
				$L2_3=1;
			}
			else
			{
				$L2_3=0;
			}

			// determinacion de logro NT2 para evaluacion 3
			if(($model->A5_E3=='L') && ($model->A6_E3=='L'))
			{
				$L3_3=1;
			}
			else
			{
				$L3_3=0;
			}

			// determinacion de logro EG1 para evaluacion 3
			if(($model->A7_E3=='L') && ($model->A8_E3=='L'))
			{
				$L4_3=1;
			}
			else
			{
				$L4_3=0;  
			}

			// calculamos el nivel de logro de la evaluaci�n 3

			if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 0) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 1))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 1) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="NT2";
			}
			else if (($L1_3 == 1) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="EG1";
			}
			
			$model ->E1 = $lv1;
			$model ->E2 = $lv2;
			$model ->E3 = $lv3;
			$model ->ANIO_C = $cursa->ANIO_C;  // tomamos el a�o de la tabla cursa
			if ($alumno != null)
				$model->RUT_A = $alumno->RUT_A;
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_T2));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$alumno = new Alumno;
		$cursa = new Cursa;
		
		
		$lv1=" ";
		$lv2=" ";
		$lv3=" ";
		
		$L1_1 = 0; // Determina si con los 3 indicadores pasa <NT1 para la evaluacion 1
		$L2_1 = 0; // Determina si con los 3 indicadores pasa NT1 para la evaluacion 1
		$L3_1 = 0; // Determina si con los 3 indicadores pasa NT2 para la evaluacion 1
		$L4_1 = 0; // Determina si con los 3 indicadores pasa EG1 para la evaluacion 1
		$L1_2 = 0; // Determina si con los 3 indicadores pasa <NT1 para la evaluacion 2
		$L2_2 = 0; // Determina si con los 3 indicadores pasa NT1 para la evaluacion 2
		$L3_2 = 0; // Determina si con los 3 indicadores pasa NT2 para la evaluacion 2
		$L4_2 = 0; // Determina si con los 3 indicadores pasa EG1 para la evaluacion 2
		$L1_3 = 0; // Determina si con los 3 indicadores pasa <NT1 para la evaluacion 3
		$L2_3 = 0; // Determina si con los 3 indicadores pasa NT1 para la evaluacion 3
		$L3_3 = 0; // Determina si con los 3 indicadores pasa NT2 para la evaluacion 3
		$L4_3 = 0; // Determina si con los 3 indicadores pasa EG1 para la evaluacion 3

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Tabla2']))
		{
			$model->attributes=$_POST['Tabla2'];
			
			$cursa = Cursa::model()->findByPk($model->ID_CURSA);
			if ($cursa != null)
				$alumno = Alumno::model()->findByPk($cursa->RUT_A);
			
			// evaluacion 1
			// determinacion de logro <NT1 para evaluacion 1
			if(($model->A1_E1=='L') && ($model->A2_E1=='L'))
			{
				$L1_1=1;
			}
			else
			{
				$L1_1=0;
			}

			// determinacion de logro NT1 para evaluacion 1
			if(($model->A3_E1=='L') && ($model->A4_E1=='L'))
			{
				$L2_1=1;
			}
			else
			{
				$L2_1=0;
			}

			// determinacion de logro NT2 para evaluacion 1
			if(($model->A5_E1=='L') && ($model->A6_E1=='L'))
			{
				$L3_1=1;
			}
			else
			{
				$L3_1=0;
			}

			// determinacion de logro EG1 para evaluacion 1
			if(($model->A7_E1=='L') && ($model->A8_E1=='L'))
			{
				$L4_1=1;
			}
			else
			{
				$L4_1=0;  
			}

			// calculamos el nivel de logro de la evaluaci�n 1

			if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 0) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="0";
			}
			else if (($L1_1 == 0) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="0";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 1))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 0) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="<NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 1) && ($L3_1 == 0) && ($L4_1 == 0))
			{
				$lv1="NT1";
			}
			else if (($L1_1 == 1) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 0))
			{
				$lv1="NT2";
			}
			else if (($L1_1 == 1) && ($L2_1 == 1) && ($L3_1 == 1) && ($L4_1 == 1))
			{
				$lv1="EG1";
			}


			// evaluacion 2
			// determinacion de logro <NT1 para evaluacion 2
			if(($model->A1_E2=='L') && ($model->A2_E2=='L'))
			{
				$L1_2=1;
			}
			else
			{
				$L1_2=0;
			}

			// determinacion de logro NT1 para evaluacion 2
			if(($model->A3_E2=='L') && ($model->A4_E2=='L'))
			{
				$L2_2=1;
			}
			else
			{
				$L2_2=0;
			}

			// determinacion de logro NT2 para evaluacion 2
			if(($model->A5_E2=='L') && ($model->A6_E2=='L'))
			{
				$L3_2=1;
			}
			else
			{
				$L3_2=0;
			}

			// determinacion de logro EG1 para evaluacion 2
			if(($model->A7_E2=='L') && ($model->A8_E2=='L'))
			{
				$L4_2=1;
			}
			else
			{
				$L4_2=0;  
			}

			// calculamos el nivel de logro de la evaluaci�n 2

			if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 0) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="0";
			}
			else if (($L1_2 == 0) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="0";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 1))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 0) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="<NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 1) && ($L3_2 == 0) && ($L4_2 == 0))
			{
				$lv2="NT1";
			}
			else if (($L1_2 == 1) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 0))
			{
				$lv2="NT2";
			}
			else if (($L1_2 == 1) && ($L2_2 == 1) && ($L3_2 == 1) && ($L4_2 == 1))
			{
				$lv2="EG1";
			}


			// evaluacion 3
			// determinacion de logro <NT1 para evaluacion 3
			if(($model->A1_E3=='L') && ($model->A2_E3=='L'))
			{
				$L1_3=1;
			}
			else
			{
				$L1_3=0;
			}

			// determinacion de logro NT1 para evaluacion 3
			if(($model->A3_E3=='L') && ($model->A4_E3=='L'))
			{
				$L2_3=1;
			}
			else
			{
				$L2_3=0;
			}

			// determinacion de logro NT2 para evaluacion 3
			if(($model->A5_E3=='L') && ($model->A6_E3=='L'))
			{
				$L3_3=1;
			}
			else
			{
				$L3_3=0;
			}

			// determinacion de logro EG1 para evaluacion 3
			if(($model->A7_E3=='L') && ($model->A8_E3=='L'))
			{
				$L4_3=1;
			}
			else
			{
				$L4_3=0;  
			}

			// calculamos el nivel de logro de la evaluaci�n 3

			if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 0) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="0";
			}
			else if (($L1_3 == 0) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="0";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 1))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 0) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="<NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 1) && ($L3_3 == 0) && ($L4_3 == 0))
			{
				$lv3="NT1";
			}
			else if (($L1_3 == 1) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 0))
			{
				$lv3="NT2";
			}
			else if (($L1_3 == 1) && ($L2_3 == 1) && ($L3_3 == 1) && ($L4_3 == 1))
			{
				$lv3="EG1";
			}
			
			$model ->E1 = $lv1;
			$model ->E2 = $lv2;
			$model ->E3 = $lv3;
			$model ->ANIO_C = $cursa->ANIO_C;  // tomamos el a�o de la tabla cursa
			if ($alumno != null)
				$model->RUT_A = $alumno->RUT_A;
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_T2));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Tabla2');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Tabla2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Tabla2']))
			$model->attributes=$_GET['Tabla2'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Tabla2 the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Tabla2::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Tabla2 $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='tabla2-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

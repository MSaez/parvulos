<?php

class EvaluarController extends Controller
{
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
		$this->render('index');
	}

	
	

	
}
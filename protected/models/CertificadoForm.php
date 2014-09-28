<?php


class CertificadoForm extends CFormModel
{
	public $cursa;
	
	

	public function rules()
	{
		return array(
			array('cursa', 'required'),
		);
	}

	
	public function attributeLabels()
	{
		return array(
			'cursa'=>'Alumno',			
		);
	}
}
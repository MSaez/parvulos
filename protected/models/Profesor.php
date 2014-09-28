<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property string $RUT_P
 * @property string $NOMBRE_P
 * @property string $APELLIDO_P
 * @property string $TIPO_P
 * @property string $PASS
 *
 * The followings are the available model relations:
 * @property Curso[] $cursos
 */
class Profesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT_P, NOMBRE_P, APELLIDO_P, TIPO_P, PASS', 'required'),
			array('RUT_P', 'unique'),
			array('RUT_P', 'length', 'max'=>12),
			array('NOMBRE_P, APELLIDO_P', 'length', 'max'=>50),
			array('TIPO_P, PASS', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RUT_P, NOMBRE_P, APELLIDO_P, TIPO_P, PASS', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cursos' => array(self::MANY_MANY, 'Curso', 'imparte(RUT_P, ID_C)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RUT_P' => 'Rut',
			'NOMBRE_P' => 'Nombre',
			'APELLIDO_P' => 'Apellidos',
			'TIPO_P' => 'Tipo Cuenta',
			
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('RUT_P',$this->RUT_P,true);
		$criteria->compare('NOMBRE_P',$this->NOMBRE_P,true);
		$criteria->compare('APELLIDO_P',$this->APELLIDO_P,true);
		$criteria->compare('TIPO_P',$this->TIPO_P,true);
		$criteria->compare('PASS',$this->PASS,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function validatePassword($password)
	{
		return $this->hashPassword($password)===$this->PASS;
	}
	public function hashPassword($password)
	{
		return md5($password);
	}
	
	public function getFullName() {
        $fullName = (! empty ( $this->NOMBRE_P )) ? $this->NOMBRE_P : '';
        $fullName .= (! empty ( $this->APELLIDO_P )) ? ((! empty ( $fullName )) ? " " . $this->APELLIDO_P : $this->APELLIDO_P) : '';
        return $fullName;
	}
}

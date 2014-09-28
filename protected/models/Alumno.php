<?php

/**
 * This is the model class for table "alumno".
 *
 * The followings are the available columns in table 'alumno':
 * @property string $RUT_A
 * @property string $NOMBRE_A
 * @property string $APELLIDO_A
 *
 * The followings are the available model relations:
 * @property Cursa[] $cursas
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alumno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT_A, NOMBRE_A, APELLIDO_A', 'required'),
			array('RUT_A', 'unique'),
			array('RUT_A', 'length', 'max'=>12),
			array('NOMBRE_A, APELLIDO_A', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('RUT_A, NOMBRE_A, APELLIDO_A', 'safe', 'on'=>'search'),
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
			'cursas' => array(self::HAS_MANY, 'Cursa', 'RUT_A'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'RUT_A' => 'Rut',
			'NOMBRE_A' => 'Nombre',
			'APELLIDO_A' => 'Apellidos',
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

		$criteria->compare('RUT_A',$this->RUT_A,true);
		$criteria->compare('NOMBRE_A',$this->NOMBRE_A,true);
		$criteria->compare('APELLIDO_A',$this->APELLIDO_A,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getFullName() {
        $fullName = (! empty ( $this->NOMBRE_A )) ? $this->NOMBRE_A : '';
        $fullName .= (! empty ( $this->APELLIDO_A )) ? ((! empty ( $fullName )) ? " " . $this->APELLIDO_A : $this->APELLIDO_A) : '';
        return $fullName;
	}
}

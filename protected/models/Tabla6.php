<?php

/**
 * This is the model class for table "tabla6".
 *
 * The followings are the available columns in table 'tabla6':
 * @property integer $ID_T6
 * @property integer $ID_CURSA
 * @property string $RUT_A
 * @property integer $ANIO_C
 * @property string $A1_E1
 * @property string $A1_E2
 * @property string $A1_E3
 * @property string $A2_E1
 * @property string $A2_E2
 * @property string $A2_E3
 * @property string $A3_E1
 * @property string $A3_E2
 * @property string $A3_E3
 * @property string $A4_E1
 * @property string $A4_E2
 * @property string $A4_E3
 * @property string $A5_E1
 * @property string $A5_E2
 * @property string $A5_E3
 * @property string $A6_E1
 * @property string $A6_E2
 * @property string $A6_E3
 * @property string $A7_E1
 * @property string $A7_E2
 * @property string $A7_E3
 * @property string $A8_E1
 * @property string $A8_E2
 * @property string $A8_E3
 * @property string $A9_E1
 * @property string $A9_E2
 * @property string $A9_E3
 * @property string $A10_E1
 * @property string $A10_E2
 * @property string $A10_E3
 * @property string $A11_E1
 * @property string $A11_E2
 * @property string $A11_E3
 * @property string $A12_E1
 * @property string $A12_E2
 * @property string $A12_E3
 * @property string $E1
 * @property string $E2
 * @property string $E3
 *
 * The followings are the available model relations:
 * @property Alumno $rUTA
 * @property Cursa $iDCURSA
 */
class Tabla6 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tabla6';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_CURSA, RUT_A, ANIO_C, A1_E1, A1_E2, A1_E3, A2_E1, A2_E2, A2_E3, A3_E1, A3_E2, A3_E3, A4_E1, A4_E2, A4_E3, A5_E1, A5_E2, A5_E3, A6_E1, A6_E2, A6_E3, A7_E1, A7_E2, A7_E3, A8_E1, A8_E2, A8_E3, A9_E1, A9_E2, A9_E3, A10_E1, A10_E2, A10_E3, A11_E1, A11_E2, A11_E3, A12_E1, A12_E2, A12_E3', 'required'),
			array('ID_CURSA, ANIO_C', 'numerical', 'integerOnly'=>true),
			array('RUT_A', 'length', 'max'=>12),
			array('A1_E1, A1_E2, A1_E3, A2_E1, A2_E2, A2_E3, A3_E1, A3_E2, A3_E3, A4_E1, A4_E2, A4_E3, A5_E1, A5_E2, A5_E3, A6_E1, A6_E2, A6_E3, A7_E1, A7_E2, A7_E3, A8_E1, A8_E2, A8_E3, A9_E1, A9_E2, A9_E3, A10_E1, A10_E2, A10_E3, A11_E1, A11_E2, A11_E3, A12_E1, A12_E2, A12_E3', 'length', 'max'=>2),
			array('E1, E2, E3', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_T6, ID_CURSA, RUT_A, ANIO_C, A1_E1, A1_E2, A1_E3, A2_E1, A2_E2, A2_E3, A3_E1, A3_E2, A3_E3, A4_E1, A4_E2, A4_E3, A5_E1, A5_E2, A5_E3, A6_E1, A6_E2, A6_E3, A7_E1, A7_E2, A7_E3, A8_E1, A8_E2, A8_E3, A9_E1, A9_E2, A9_E3, A10_E1, A10_E2, A10_E3, A11_E1, A11_E2, A11_E3, A12_E1, A12_E2, A12_E3, E1, E2, E3', 'safe', 'on'=>'search'),
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
			'rUTA' => array(self::BELONGS_TO, 'Alumno', 'RUT_A'),
			'iDCURSA' => array(self::BELONGS_TO, 'Cursa', 'ID_CURSA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_T6' => 'ID',
			'ID_CURSA' => 'Id Asignación',
			'RUT_A' => 'Alumno',
			'ANIO_C' => 'Año',
			'A1_E1' => 'Atributo 1 Evaluación 1',
			'A1_E2' => 'Atributo 1 Evaluación 2',
			'A1_E3' => 'Atributo 1 Evaluación 3',
			'A2_E1' => 'Atributo 2 Evaluación 1',
			'A2_E2' => 'Atributo 2 Evaluación 2',
			'A2_E3' => 'Atributo 2 Evaluación 3',
			'A3_E1' => 'Atributo 3 Evaluación 1',
			'A3_E2' => 'Atributo 3 Evaluación 2',
			'A3_E3' => 'Atributo 3 Evaluación 3',
			'A4_E1' => 'Atributo 4 Evaluación 1',
			'A4_E2' => 'Atributo 4 Evaluación 2',
			'A4_E3' => 'Atributo 4 Evaluación 3',
			'A5_E1' => 'Atributo 5 Evaluación 1',
			'A5_E2' => 'Atributo 5 Evaluación 2',
			'A5_E3' => 'Atributo 5 Evaluación 3',
			'A6_E1' => 'Atributo 6 Evaluación 1',
			'A6_E2' => 'Atributo 6 Evaluación 2',
			'A6_E3' => 'Atributo 6 Evaluación 3',
			'A7_E1' => 'Atributo 7 Evaluación 1',
			'A7_E2' => 'Atributo 7 Evaluación 2',
			'A7_E3' => 'Atributo 7 Evaluación 3',
			'A8_E1' => 'Atributo 8 Evaluación 1',
			'A8_E2' => 'Atributo 8 Evaluación 2',
			'A8_E3' => 'Atributo 8 Evaluación 3',
			'A9_E1' => 'Atributo 9 Evaluación 1',
			'A9_E2' => 'Atributo 9 Evaluación 2',
			'A9_E3' => 'Atributo 9 Evaluación 3',
			'A10_E1' => 'Atributo 10 Evaluación 1',
			'A10_E2' => 'Atributo 10 Evaluación 2',
			'A10_E3' => 'Atributo 10 Evaluación 3',
			'A11_E1' => 'Atributo 11 Evaluación 1',
			'A11_E2' => 'Atributo 11 Evaluación 2',
			'A11_E3' => 'Atributo 11 Evaluación 3',
			'A12_E1' => 'Atributo 12 Evaluación 1',
			'A12_E2' => 'Atributo 12 Evaluación 2',
			'A12_E3' => 'Atributo 12 Evaluación 3',
			'E1' => 'Evaluación 1',
			'E2' => 'Evaluación 2',
			'E3' => 'Evaluación 3',
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

		$criteria->compare('ID_T6',$this->ID_T6);
		$criteria->compare('ID_CURSA',$this->ID_CURSA);
		$criteria->compare('RUT_A',$this->RUT_A,true);
		$criteria->compare('ANIO_C',$this->ANIO_C);
		$criteria->compare('A1_E1',$this->A1_E1,true);
		$criteria->compare('A1_E2',$this->A1_E2,true);
		$criteria->compare('A1_E3',$this->A1_E3,true);
		$criteria->compare('A2_E1',$this->A2_E1,true);
		$criteria->compare('A2_E2',$this->A2_E2,true);
		$criteria->compare('A2_E3',$this->A2_E3,true);
		$criteria->compare('A3_E1',$this->A3_E1,true);
		$criteria->compare('A3_E2',$this->A3_E2,true);
		$criteria->compare('A3_E3',$this->A3_E3,true);
		$criteria->compare('A4_E1',$this->A4_E1,true);
		$criteria->compare('A4_E2',$this->A4_E2,true);
		$criteria->compare('A4_E3',$this->A4_E3,true);
		$criteria->compare('A5_E1',$this->A5_E1,true);
		$criteria->compare('A5_E2',$this->A5_E2,true);
		$criteria->compare('A5_E3',$this->A5_E3,true);
		$criteria->compare('A6_E1',$this->A6_E1,true);
		$criteria->compare('A6_E2',$this->A6_E2,true);
		$criteria->compare('A6_E3',$this->A6_E3,true);
		$criteria->compare('A7_E1',$this->A7_E1,true);
		$criteria->compare('A7_E2',$this->A7_E2,true);
		$criteria->compare('A7_E3',$this->A7_E3,true);
		$criteria->compare('A8_E1',$this->A8_E1,true);
		$criteria->compare('A8_E2',$this->A8_E2,true);
		$criteria->compare('A8_E3',$this->A8_E3,true);
		$criteria->compare('A9_E1',$this->A9_E1,true);
		$criteria->compare('A9_E2',$this->A9_E2,true);
		$criteria->compare('A9_E3',$this->A9_E3,true);
		$criteria->compare('A10_E1',$this->A10_E1,true);
		$criteria->compare('A10_E2',$this->A10_E2,true);
		$criteria->compare('A10_E3',$this->A10_E3,true);
		$criteria->compare('A11_E1',$this->A11_E1,true);
		$criteria->compare('A11_E2',$this->A11_E2,true);
		$criteria->compare('A11_E3',$this->A11_E3,true);
		$criteria->compare('A12_E1',$this->A12_E1,true);
		$criteria->compare('A12_E2',$this->A12_E2,true);
		$criteria->compare('A12_E3',$this->A12_E3,true);
		$criteria->compare('E1',$this->E1,true);
		$criteria->compare('E2',$this->E2,true);
		$criteria->compare('E3',$this->E3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tabla6 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

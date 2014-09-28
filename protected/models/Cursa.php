<?php

/**
 * This is the model class for table "cursa".
 *
 * The followings are the available columns in table 'cursa':
 * @property integer $ID
 * @property string $RUT_A
 * @property string $ID_C
 * @property integer $ANIO_C
 *
 * The followings are the available model relations:
 * @property Alumno $rUTA
 * @property Curso $iDC
 * @property Tabla1[] $tabla1s
 * @property Tabla10[] $tabla10s
 * @property Tabla11[] $tabla11s
 * @property Tabla12[] $tabla12s
 * @property Tabla13[] $tabla13s
 * @property Tabla14[] $tabla14s
 * @property Tabla15[] $tabla15s
 * @property Tabla16[] $tabla16s
 * @property Tabla2[] $tabla2s
 * @property Tabla3[] $tabla3s
 * @property Tabla4[] $tabla4s
 * @property Tabla5[] $tabla5s
 * @property Tabla6[] $tabla6s
 * @property Tabla7[] $tabla7s
 * @property Tabla8[] $tabla8s
 * @property Tabla9[] $tabla9s
 */
class Cursa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cursa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT_A, ID_C, ANIO_C', 'required'),
			array('ANIO_C', 'numerical', 'integerOnly'=>true),
			array('RUT_A', 'length', 'max'=>12),
			array('ID_C', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, RUT_A, ID_C, ANIO_C', 'safe', 'on'=>'search'),
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
			'iDC' => array(self::BELONGS_TO, 'Curso', 'ID_C'),
			'tabla1s' => array(self::HAS_MANY, 'Tabla1', 'ID_cursa'),
			'tabla10s' => array(self::HAS_MANY, 'Tabla10', 'ID_CURSA'),
			'tabla11s' => array(self::HAS_MANY, 'Tabla11', 'ID_CURSA'),
			'tabla12s' => array(self::HAS_MANY, 'Tabla12', 'ID_CURSA'),
			'tabla13s' => array(self::HAS_MANY, 'Tabla13', 'ID_CURSA'),
			'tabla14s' => array(self::HAS_MANY, 'Tabla14', 'ID_CURSA'),
			'tabla15s' => array(self::HAS_MANY, 'Tabla15', 'ID_CURSA'),
			'tabla16s' => array(self::HAS_MANY, 'Tabla16', 'ID_CURSA'),
			'tabla2s' => array(self::HAS_MANY, 'Tabla2', 'ID_CURSA'),
			'tabla3s' => array(self::HAS_MANY, 'Tabla3', 'ID_CURSA'),
			'tabla4s' => array(self::HAS_MANY, 'Tabla4', 'ID_CURSA'),
			'tabla5s' => array(self::HAS_MANY, 'Tabla5', 'ID_CURSA'),
			'tabla6s' => array(self::HAS_MANY, 'Tabla6', 'ID_CURSA'),
			'tabla7s' => array(self::HAS_MANY, 'Tabla7', 'ID_CURSA'),
			'tabla8s' => array(self::HAS_MANY, 'Tabla8', 'ID_CURSA'),
			'tabla9s' => array(self::HAS_MANY, 'Tabla9', 'ID_CURSA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'RUT_A' => 'Alumno',
			'ID_C' => 'Curso',
			'ANIO_C' => 'Año',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('RUT_A',$this->RUT_A,true);
		$criteria->compare('ID_C',$this->ID_C,true);
		$criteria->compare('ANIO_C',$this->ANIO_C);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cursa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getFullName() {
		

        $fullName = (! empty ( $this->RUT_A )) ? $this->rUTA->NOMBRE_A.' '.$this->rUTA->APELLIDO_A : '';
        $fullName .= (! empty ( $this->ID_C )) ? ((! empty ( $fullName )) ? " ," . $this->ANIO_C.', ' .$this->iDC->NOMBRE_C : $this->ID_C) : '';
		
        return $fullName;
	}
}

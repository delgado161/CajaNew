<?php

/**
 * This is the model class for table "cajas".
 *
 * The followings are the available columns in table 'cajas':
 * @property integer $id_cajas
 * @property string $nombre
 * @property double $monto_inscripcion
 * @property double $monto_mensualidad
 * @property double $int_socios
 * @property double $int_terceros
 * @property integer $dia_pago
 * @property integer $dias_a_prestamo
 * @property string $numero_cuenta
 * @property double $int_mora_prestamo
 * @property double $int_mensualidad
 * @property integer $bancos_id_bancos
 */
class ModelCajas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cajas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, monto_inscripcion, monto_mensualidad, int_socios, int_terceros, dia_pago, dias_a_prestamo, numero_cuenta, int_mora_prestamo, int_mensualidad, bancos_id_bancos', 'required'),
			array('dia_pago, dias_a_prestamo, bancos_id_bancos', 'numerical', 'integerOnly'=>true),
			array('monto_inscripcion, monto_mensualidad, int_socios, int_terceros, int_mora_prestamo, int_mensualidad', 'numerical'),
			array('nombre, numero_cuenta', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cajas, nombre, monto_inscripcion, monto_mensualidad, int_socios, int_terceros, dia_pago, dias_a_prestamo, numero_cuenta, int_mora_prestamo, int_mensualidad, bancos_id_bancos', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cajas' => 'Id Cajas',
			'nombre' => 'Nombre',
			'monto_inscripcion' => 'Monto Inscripcion',
			'monto_mensualidad' => 'Monto Mensualidad',
			'int_socios' => 'Int Socios',
			'int_terceros' => 'Int Terceros',
			'dia_pago' => 'Dia Pago',
			'dias_a_prestamo' => 'Dias A Prestamo',
			'numero_cuenta' => 'Numero Cuenta',
			'int_mora_prestamo' => 'Int Mora Prestamo',
			'int_mensualidad' => 'Int Mensualidad',
			'bancos_id_bancos' => 'Bancos Id Bancos',
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

		$criteria->compare('id_cajas',$this->id_cajas);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('monto_inscripcion',$this->monto_inscripcion);
		$criteria->compare('monto_mensualidad',$this->monto_mensualidad);
		$criteria->compare('int_socios',$this->int_socios);
		$criteria->compare('int_terceros',$this->int_terceros);
		$criteria->compare('dia_pago',$this->dia_pago);
		$criteria->compare('dias_a_prestamo',$this->dias_a_prestamo);
		$criteria->compare('numero_cuenta',$this->numero_cuenta,true);
		$criteria->compare('int_mora_prestamo',$this->int_mora_prestamo);
		$criteria->compare('int_mensualidad',$this->int_mensualidad);
		$criteria->compare('bancos_id_bancos',$this->bancos_id_bancos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelCajas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

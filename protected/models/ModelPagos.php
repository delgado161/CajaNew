<?php

/**
 * This is the model class for table "pagos".
 *
 * The followings are the available columns in table 'pagos':
 * @property integer $id_pagos
 * @property double $monto
 * @property string $fecha_pago
 * @property string $referencia
 * @property string $tipo_deposito
 * @property integer $bancos_id_bancos
 * @property integer $cajita_id_cajita
 * @property integer $status_id_status
 */
class ModelPagos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, fecha_pago, referencia, tipo_deposito, bancos_id_bancos, cajita_id_cajita, status_id_status', 'required'),
			array('bancos_id_bancos, cajita_id_cajita, status_id_status', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			array('referencia', 'length', 'max'=>45),
			array('tipo_deposito', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pagos, monto, fecha_pago, referencia, tipo_deposito, bancos_id_bancos, cajita_id_cajita, status_id_status', 'safe', 'on'=>'search'),
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
			'id_pagos' => 'Id Pagos',
			'monto' => 'Monto',
			'fecha_pago' => 'Fecha Pago',
			'referencia' => 'Referencia',
			'tipo_deposito' => 'Tipo Deposito',
			'bancos_id_bancos' => 'Bancos Id Bancos',
			'cajita_id_cajita' => 'Cajita Id Cajita',
			'status_id_status' => 'Status Id Status',
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

		$criteria->compare('id_pagos',$this->id_pagos);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('referencia',$this->referencia,true);
		$criteria->compare('tipo_deposito',$this->tipo_deposito,true);
		$criteria->compare('bancos_id_bancos',$this->bancos_id_bancos);
		$criteria->compare('cajita_id_cajita',$this->cajita_id_cajita);
		$criteria->compare('status_id_status',$this->status_id_status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelPagos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

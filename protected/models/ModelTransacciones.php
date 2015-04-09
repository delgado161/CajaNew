<?php

/**
 * This is the model class for table "transacciones".
 *
 * The followings are the available columns in table 'transacciones':
 * @property integer $id_transacciones
 * @property double $monto
 * @property integer $pagos_id_pagos
 * @property integer $status_id_status
 * @property integer $usuarios_id_usuarios
 * @property integer $tipo_pago_id_tipo_pago
 */
class ModelTransacciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transacciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, pagos_id_pagos, status_id_status, usuarios_id_usuarios, tipo_pago_id_tipo_pago', 'required'),
			array('pagos_id_pagos, status_id_status, usuarios_id_usuarios, tipo_pago_id_tipo_pago', 'numerical', 'integerOnly'=>true),
			array('monto', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transacciones, monto, pagos_id_pagos, status_id_status, usuarios_id_usuarios, tipo_pago_id_tipo_pago', 'safe', 'on'=>'search'),
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
			'id_transacciones' => 'Id Transacciones',
			'monto' => 'Monto',
			'pagos_id_pagos' => 'Pagos Id Pagos',
			'status_id_status' => 'Status Id Status',
			'usuarios_id_usuarios' => 'Usuarios Id Usuarios',
			'tipo_pago_id_tipo_pago' => 'Tipo Pago Id Tipo Pago',
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

		$criteria->compare('id_transacciones',$this->id_transacciones);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('pagos_id_pagos',$this->pagos_id_pagos);
		$criteria->compare('status_id_status',$this->status_id_status);
		$criteria->compare('usuarios_id_usuarios',$this->usuarios_id_usuarios);
		$criteria->compare('tipo_pago_id_tipo_pago',$this->tipo_pago_id_tipo_pago);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelTransacciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

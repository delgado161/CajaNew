<?php

/**
 * This is the model class for table "prestamos".
 *
 * The followings are the available columns in table 'prestamos':
 * @property integer $id_prestamos
 * @property string $fecha_solicitud
 * @property string $fecha_aprobacion
 * @property double $cantidad_solicitada
 * @property double $cantidad_aprobada
 * @property string $observacion
 * @property string $motivo
 * @property string $mes_pago
 * @property string $tipo_prestamo
 * @property integer $status_id_status
 * @property integer $cajita_id_cajita
 */
class ModelPrestamos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prestamos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_solicitud, fecha_aprobacion, cantidad_solicitada, cantidad_aprobada, observacion, motivo, mes_pago, tipo_prestamo, status_id_status, cajita_id_cajita', 'required'),
			array('status_id_status, cajita_id_cajita', 'numerical', 'integerOnly'=>true),
			array('cantidad_solicitada, cantidad_aprobada', 'numerical'),
			array('observacion, motivo', 'length', 'max'=>200),
			array('mes_pago, tipo_prestamo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_prestamos, fecha_solicitud, fecha_aprobacion, cantidad_solicitada, cantidad_aprobada, observacion, motivo, mes_pago, tipo_prestamo, status_id_status, cajita_id_cajita', 'safe', 'on'=>'search'),
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
			'id_prestamos' => 'Id Prestamos',
			'fecha_solicitud' => 'Fecha Solicitud',
			'fecha_aprobacion' => 'Fecha Aprobacion',
			'cantidad_solicitada' => 'Cantidad Solicitada',
			'cantidad_aprobada' => 'Cantidad Aprobada',
			'observacion' => 'Observacion',
			'motivo' => 'Motivo',
			'mes_pago' => 'Mes Pago',
			'tipo_prestamo' => 'Tipo Prestamo',
			'status_id_status' => 'Status Id Status',
			'cajita_id_cajita' => 'Cajita Id Cajita',
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

		$criteria->compare('id_prestamos',$this->id_prestamos);
		$criteria->compare('fecha_solicitud',$this->fecha_solicitud,true);
		$criteria->compare('fecha_aprobacion',$this->fecha_aprobacion,true);
		$criteria->compare('cantidad_solicitada',$this->cantidad_solicitada);
		$criteria->compare('cantidad_aprobada',$this->cantidad_aprobada);
		$criteria->compare('observacion',$this->observacion,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('mes_pago',$this->mes_pago,true);
		$criteria->compare('tipo_prestamo',$this->tipo_prestamo,true);
		$criteria->compare('status_id_status',$this->status_id_status);
		$criteria->compare('cajita_id_cajita',$this->cajita_id_cajita);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelPrestamos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

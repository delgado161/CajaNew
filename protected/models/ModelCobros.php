<?php

/**
 * This is the model class for table "cobros".
 *
 * The followings are the available columns in table 'cobros':
 * @property integer $id_cobros
 * @property string $monto
 * @property integer $transacciones_id_transacciones
 * @property integer $prestamos_id_prestamos
 */
class ModelCobros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cobros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, transacciones_id_transacciones, prestamos_id_prestamos', 'required'),
			array('transacciones_id_transacciones, prestamos_id_prestamos', 'numerical', 'integerOnly'=>true),
			array('monto', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cobros, monto, transacciones_id_transacciones, prestamos_id_prestamos', 'safe', 'on'=>'search'),
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
			'id_cobros' => 'Id Cobros',
			'monto' => 'Monto',
			'transacciones_id_transacciones' => 'Transacciones Id Transacciones',
			'prestamos_id_prestamos' => 'Prestamos Id Prestamos',
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

		$criteria->compare('id_cobros',$this->id_cobros);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('transacciones_id_transacciones',$this->transacciones_id_transacciones);
		$criteria->compare('prestamos_id_prestamos',$this->prestamos_id_prestamos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelCobros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

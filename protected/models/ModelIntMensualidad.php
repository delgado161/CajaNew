<?php

/**
 * This is the model class for table "int_mensualidad".
 *
 * The followings are the available columns in table 'int_mensualidad':
 * @property integer $id_int_mensualidad
 * @property double $monto
 * @property double $monto_cancelado
 * @property integer $cajita_id_cajita
 */
class ModelIntMensualidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'int_mensualidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, monto_cancelado, cajita_id_cajita', 'required'),
			array('cajita_id_cajita', 'numerical', 'integerOnly'=>true),
			array('monto, monto_cancelado', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_int_mensualidad, monto, monto_cancelado, cajita_id_cajita', 'safe', 'on'=>'search'),
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
			'id_int_mensualidad' => 'Id Int Mensualidad',
			'monto' => 'Monto',
			'monto_cancelado' => 'Monto Cancelado',
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

		$criteria->compare('id_int_mensualidad',$this->id_int_mensualidad);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('monto_cancelado',$this->monto_cancelado);
		$criteria->compare('cajita_id_cajita',$this->cajita_id_cajita);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelIntMensualidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

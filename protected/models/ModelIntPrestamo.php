<?php

/**
 * This is the model class for table "int_prestamo".
 *
 * The followings are the available columns in table 'int_prestamo':
 * @property integer $id_int_prestamo
 * @property double $monto
 * @property double $monto_cancelado
 * @property integer $prestamos_id_prestamos
 */
class ModelIntPrestamo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'int_prestamo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, monto_cancelado, prestamos_id_prestamos', 'required'),
			array('prestamos_id_prestamos', 'numerical', 'integerOnly'=>true),
			array('monto, monto_cancelado', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_int_prestamo, monto, monto_cancelado, prestamos_id_prestamos', 'safe', 'on'=>'search'),
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
			'id_int_prestamo' => 'Id Int Prestamo',
			'monto' => 'Monto',
			'monto_cancelado' => 'Monto Cancelado',
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

		$criteria->compare('id_int_prestamo',$this->id_int_prestamo);
		$criteria->compare('monto',$this->monto);
		$criteria->compare('monto_cancelado',$this->monto_cancelado);
		$criteria->compare('prestamos_id_prestamos',$this->prestamos_id_prestamos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelIntPrestamo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

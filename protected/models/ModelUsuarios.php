<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id_usuarios
 * @property string $ci
 * @property string $tipo_doc
 * @property string $p_nombre
 * @property string $s_nombre
 * @property string $p_apellido
 * @property string $s_apellido
 * @property string $genero
 * @property string $fecha_nacimiento
 * @property string $login
 * @property string $pasword
 * @property string $n_cuenta
 * @property integer $bancos_id_bancos
 */
class ModelUsuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ci, tipo_doc, p_nombre, s_nombre, p_apellido, s_apellido, genero, fecha_nacimiento, login, pasword, n_cuenta, bancos_id_bancos', 'required'),
			array('bancos_id_bancos', 'numerical', 'integerOnly'=>true),
			array('ci', 'length', 'max'=>8),
			array('tipo_doc', 'length', 'max'=>1),
			array('p_nombre, s_nombre, p_apellido, s_apellido, genero, pasword, n_cuenta', 'length', 'max'=>45),
			array('login', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuarios, ci, tipo_doc, p_nombre, s_nombre, p_apellido, s_apellido, genero, fecha_nacimiento, login, pasword, n_cuenta, bancos_id_bancos', 'safe', 'on'=>'search'),
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
			'id_usuarios' => 'Id Usuarios',
			'ci' => 'Ci',
			'tipo_doc' => 'Tipo Doc',
			'p_nombre' => 'P Nombre',
			's_nombre' => 'S Nombre',
			'p_apellido' => 'P Apellido',
			's_apellido' => 'S Apellido',
			'genero' => 'Genero',
			'fecha_nacimiento' => 'Fecha Nacimiento',
			'login' => 'Login',
			'pasword' => 'Pasword',
			'n_cuenta' => 'N Cuenta',
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

		$criteria->compare('id_usuarios',$this->id_usuarios);
		$criteria->compare('ci',$this->ci,true);
		$criteria->compare('tipo_doc',$this->tipo_doc,true);
		$criteria->compare('p_nombre',$this->p_nombre,true);
		$criteria->compare('s_nombre',$this->s_nombre,true);
		$criteria->compare('p_apellido',$this->p_apellido,true);
		$criteria->compare('s_apellido',$this->s_apellido,true);
		$criteria->compare('genero',$this->genero,true);
		$criteria->compare('fecha_nacimiento',$this->fecha_nacimiento,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('pasword',$this->pasword,true);
		$criteria->compare('n_cuenta',$this->n_cuenta,true);
		$criteria->compare('bancos_id_bancos',$this->bancos_id_bancos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ModelUsuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

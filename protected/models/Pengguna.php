<?php

/**
 * This is the model class for table "pengguna".
 *
 * The followings are the available columns in table 'pengguna':
 * @property integer $idpengguna
 * @property string $namapengguna
 * @property string $username
 * @property string $password
 * @property integer $statusaktiv
 * @property integer $level
 *
 * The followings are the available model relations:
 * @property Pendaftaran[] $pendaftarans
 */
class Pengguna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengguna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('namapengguna, username, password', 'required'),
			array('idpengguna, statusaktiv, level', 'numerical', 'integerOnly'=>true),
			array('namapengguna', 'length', 'max'=>75),
			array('username', 'length', 'max'=>15),
			array('password', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpengguna, namapengguna, username, password, statusaktiv, level', 'safe', 'on'=>'search'),
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
			'pendaftarans' => array(self::HAS_MANY, 'Pendaftaran', 'idpengguna'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpengguna' => 'Idpengguna',
			'namapengguna' => 'Nama',
			'username' => 'Username',
			'password' => 'Password',
			'statusaktiv' => 'Status',
			'level' => 'Level',
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

		$criteria->compare('idpengguna',$this->idpengguna);
		$criteria->compare('namapengguna',$this->namapengguna,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('statusaktiv',$this->statusaktiv);
		$criteria->compare('level',$this->level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pengguna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

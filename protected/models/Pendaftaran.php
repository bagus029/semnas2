<?php

/**
 * This is the model class for table "pendaftaran".
 *
 * The followings are the available columns in table 'pendaftaran':
 * @property integer $idpendseminar
 * @property integer $idseminar
 * @property integer $idpengguna
 * @property string $nama
 * @property string $gelarawal
 * @property string $gelarakhir
 * @property string $tempatlahir
 * @property string $tanggallahir
 * @property string $institusi
 * @property string $email
 * @property string $nohp
 * @property string $telepon
 * @property integer $statuspend
 * @property string $tanggaldaftar
 *
 * The followings are the available model relations:
 * @property Buktipembayaran[] $buktipembayarans
 * @property Pemakalah[] $pemakalahs
 * @property Seminar $idseminar0
 * @property Pengguna $idpengguna0
 */
class Pendaftaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pendaftaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, email, nohp, tempatlahir, tanggallahir, institusi', 'required'),
			array('idpendseminar, idseminar, idpengguna, statuspend', 'numerical', 'integerOnly'=>true),
			array('nama, gelarakhir, tempatlahir', 'length', 'max'=>75),
			array('gelarawal', 'length', 'max'=>15),
			array('email, nohp, telepon', 'length', 'max'=>45),
			array('tanggallahir, institusi, tanggaldaftar', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpendseminar, idseminar, idpengguna, nama, gelarawal, gelarakhir, tempatlahir, tanggallahir, institusi, email, nohp, telepon, statuspend, tanggaldaftar', 'safe', 'on'=>'search'),
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
			'buktipembayarans' => array(self::HAS_MANY, 'Buktipembayaran', 'idpendseminar'),
			'pemakalahs' => array(self::HAS_MANY, 'Pemakalah', 'idpendseminar'),
			'idseminar0' => array(self::BELONGS_TO, 'Seminar', 'idseminar'),
			'idpengguna0' => array(self::BELONGS_TO, 'Pengguna', 'idpengguna'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpendseminar' => 'Id',
			'idseminar' => 'Nama Seminar',
			'idpengguna' => 'Username',
			'nama' => 'Nama',
			'gelarawal' => 'Gelar Awal',
			'gelarakhir' => 'Gelar Akhir',
			'tempatlahir' => 'Tempat Lahir',
			'tanggallahir' => 'Tanggal Lahir',
			'institusi' => 'Institusi',
			'email' => 'Email',
			'nohp' => 'No Handphone',
			'telepon' => 'Telepon',
			'statuspend' => 'Status',
			'tanggaldaftar' => 'Tanggal Daftar',
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

		$criteria->compare('idpendseminar',$this->idpendseminar);
		$criteria->compare('idseminar',$this->idseminar);
		$criteria->compare('idpengguna',$this->idpengguna);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('gelarawal',$this->gelarawal,true);
		$criteria->compare('gelarakhir',$this->gelarakhir,true);
		$criteria->compare('tempatlahir',$this->tempatlahir,true);
		$criteria->compare('tanggallahir',$this->tanggallahir,true);
		$criteria->compare('institusi',$this->institusi,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nohp',$this->nohp,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('statuspend',$this->statuspend);
		$criteria->compare('tanggaldaftar',$this->tanggaldaftar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pendaftaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

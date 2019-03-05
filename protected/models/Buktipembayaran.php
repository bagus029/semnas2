<?php

/**
 * This is the model class for table "buktipembayaran".
 *
 * The followings are the available columns in table 'buktipembayaran':
 * @property integer $idbuktipembayaran
 * @property integer $idpendseminar
 * @property string $buktipembayaran
 * @property integer $statusbuktipembayaran
 *
 * The followings are the available model relations:
 * @property Pendaftaran $idpendseminar0
 */
class Buktipembayaran extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'buktipembayaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idbuktipembayaran', 'required'),
			array('idbuktipembayaran, idpendseminar, statusbuktipembayaran', 'numerical', 'integerOnly'=>true),
			array('buktipembayaran', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbuktipembayaran, idpendseminar, buktipembayaran, statusbuktipembayaran', 'safe', 'on'=>'search'),
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
			'idpendseminar0' => array(self::BELONGS_TO, 'Pendaftaran', 'idpendseminar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbuktipembayaran' => 'Id',
			'idpendseminar' => 'Nama',
			'buktipembayaran' => 'Bukti Pembayaran',
			'statusbuktipembayaran' => 'Status Pembayaran',
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

		$criteria->compare('idbuktipembayaran',$this->idbuktipembayaran);
		$criteria->compare('idpendseminar',$this->idpendseminar);
		$criteria->compare('buktipembayaran',$this->buktipembayaran,true);
		$criteria->compare('statusbuktipembayaran',$this->statusbuktipembayaran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Buktipembayaran the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

<?php

/**
 * This is the model class for table "seminar".
 *
 * The followings are the available columns in table 'seminar':
 * @property integer $idseminar
 * @property string $namaseminar
 * @property string $tanggalpelaksanaan
 * @property integer $statusseminar
 *
 * The followings are the available model relations:
 * @property Pendaftaran[] $pendaftarans
 */
class Seminar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seminar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idseminar', 'required'),
			array('idseminar, statusseminar', 'numerical', 'integerOnly'=>true),
			array('namaseminar', 'length', 'max'=>85),
			array('tanggalpelaksanaan', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idseminar, namaseminar, tanggalpelaksanaan, statusseminar', 'safe', 'on'=>'search'),
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
			'pendaftarans' => array(self::HAS_MANY, 'Pendaftaran', 'idseminar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idseminar' => 'Id',
			'namaseminar' => 'Nama Seminar',
			'tanggalpelaksanaan' => 'Tanggal Pelaksanaan',
			'statusseminar' => 'Status',
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

		$criteria->compare('idseminar',$this->idseminar);
		$criteria->compare('namaseminar',$this->namaseminar,true);
		$criteria->compare('tanggalpelaksanaan',$this->tanggalpelaksanaan,true);
		$criteria->compare('statusseminar',$this->statusseminar);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seminar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

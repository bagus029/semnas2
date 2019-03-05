<?php

/**
 * This is the model class for table "pemakalah".
 *
 * The followings are the available columns in table 'pemakalah':
 * @property integer $idpemakalah
 * @property integer $idpendseminar
 * @property string $penulis1
 * @property string $penulis2
 * @property string $penulis3
 * @property string $penulis4
 * @property string $penulis5
 * @property string $judulartikel
 * @property string $area
 * @property integer $statuspemakalah
 *
 * The followings are the available model relations:
 * @property Abstrakartikel[] $abstrakartikels
 * @property Pendaftaran $idpendseminar0
 */
class Pemakalah extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pemakalah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('idpemakalah', 'required'),
			array('idpemakalah, idpendseminar, statuspemakalah', 'numerical', 'integerOnly'=>true),
			array('penulis1, penulis2, penulis3', 'length', 'max'=>75),
			array('area', 'length', 'max'=>35),
			array('judulartikel', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpemakalah, idpendseminar, penulis1, penulis2, penulis3, penulis4, penulis5, judulartikel, area, statuspemakalah', 'safe', 'on'=>'search'),
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
			'abstrakartikels' => array(self::HAS_MANY, 'Abstrakartikel', 'idpemakalah'),
			'idpendseminar0' => array(self::BELONGS_TO, 'Pendaftaran', 'idpendseminar'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpemakalah' => 'Id',
			'idpendseminar' => 'Nama',
			'penulis1' => 'Penulis 1',
			'penulis2' => 'Penulis 2',
			'penulis3' => 'Penulis 3',
                        'penulis4' => 'Penulis 4',
                        'penulis5' => 'Penulis 5',
			'judulartikel' => 'Judul Artikel',
			'area' => 'Area',
			'statuspemakalah' => 'Status',
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

		$criteria->compare('idpemakalah',$this->idpemakalah);
		$criteria->compare('idpendseminar',$this->idpendseminar);
		$criteria->compare('penulis1',$this->penulis1,true);
		$criteria->compare('penulis2',$this->penulis2,true);
		$criteria->compare('penulis3',$this->penulis3,true);
		$criteria->compare('judulartikel',$this->judulartikel,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('statuspemakalah',$this->statuspemakalah);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pemakalah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

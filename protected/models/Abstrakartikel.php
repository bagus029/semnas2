<?php

/**
 * This is the model class for table "abstrakartikel".
 *
 * The followings are the available columns in table 'abstrakartikel':
 * @property integer $idabstrakartikel
 * @property integer $idpemakalah
 * @property string $abstrak
 * @property string $tglabstrak
 * @property string $updateabstrak
 * @property integer $statusabstrak
 * @property string $artikel
 * @property integer $statusartikel
 * @property string $tglartikel
 * @property string $updateartikel
 *
 * The followings are the available model relations:
 * @property Pemakalah $idpemakalah0
 */
class Abstrakartikel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'abstrakartikel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idabstrakartikel', 'required'),
			array('idabstrakartikel, idpemakalah, statusabstrak, statusartikel', 'numerical', 'integerOnly'=>true),
			array('abstrak, artikel', 'length', 'max'=>100),
			array('tglabstrak, updateabstrak, tglartikel, updateartikel', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idabstrakartikel, idpemakalah, abstrak, tglabstrak, updateabstrak, statusabstrak, artikel, statusartikel, tglartikel, updateartikel', 'safe', 'on'=>'search'),
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
			'idpemakalah0' => array(self::BELONGS_TO, 'Pemakalah', 'idpemakalah'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idabstrakartikel' => 'Id',
			'idpemakalah' => 'Pemakalah',
			'abstrak' => 'Upload Abstrak',
			'tglabstrak' => 'Tanggal Upload Abstrak',
			'updateabstrak' => 'Tanggal Update Abstrak',
			'statusabstrak' => 'Status Abstrak',
			'artikel' => 'Upload Artikel',
			'statusartikel' => 'Status Artikel',
			'tglartikel' => 'Tanggal Upload Artikel',
			'updateartikel' => 'Tanggal Update Artikel',
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

		$criteria->compare('idabstrakartikel',$this->idabstrakartikel);
		$criteria->compare('idpemakalah',$this->idpemakalah);
		$criteria->compare('abstrak',$this->abstrak,true);
		$criteria->compare('tglabstrak',$this->tglabstrak,true);
		$criteria->compare('updateabstrak',$this->updateabstrak,true);
		$criteria->compare('statusabstrak',$this->statusabstrak);
		$criteria->compare('artikel',$this->artikel,true);
		$criteria->compare('statusartikel',$this->statusartikel);
		$criteria->compare('tglartikel',$this->tglartikel,true);
		$criteria->compare('updateartikel',$this->updateartikel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Abstrakartikel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

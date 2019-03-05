<?php

/**
 * This is the model class for table "abstrak".
 *
 * The followings are the available columns in table 'abstrakartikel':
 * @property integer $idabstrak
 * @property integer $idpendseminar
 * @property string $namaabstrak
 * @property string $fileabstrak
 * @property string $tgluploadabstrak
 * @property integer $statusabstrak
 *
 * The followings are the available model relations:
 * @property Pemakalah $idpemakalah0
 */
class Abstrak extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'abstrak';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('idabstrakartikel', 'required'),
			array('idabstrak, idpendseminar, statusabstrak', 'numerical', 'integerOnly'=>true),
			array('namaabstrak, fileabstrak', 'length', 'max'=>100),
			array('tgluploadabstrak', 'safe'),
                    
                        array('fileabstrak','file','types'=>'pdf,doc,docx', 'allowEmpty'=>false, 'on'=>'create'),
			array('fileabstrak','file','types'=>'pdf,doc,docx', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idabstrak, idpendseminar, namaabstrak, fileabstrak, tgluploadabstrak, statusabstrak', 'safe', 'on'=>'search'),
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
			'idabstrak' => 'Id',
			'idpendseminar' => 'Pendaftar',
			'namaabstrak' => 'Abstrak',
			'fileabstrak' => 'Upload Abstrak',
			'tgluploadabstrak' => 'Tanggal Upload Abstrak',
			'statusabstrak' => 'Status Abstrak',
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

		$criteria->compare('idabstrak',$this->idabstrak);
		$criteria->compare('idpendseminar',$this->idpendseminar);
		$criteria->compare('namaabstrak',$this->namaabstrak,true);
		$criteria->compare('fileabstrak',$this->fileabstrak,true);
		$criteria->compare('tgluploadabstrak',$this->tgluploadabstrak,true);
		$criteria->compare('statusabstrak',$this->statusabstrak);

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

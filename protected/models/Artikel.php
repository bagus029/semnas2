<?php

/**
 * This is the model class for table "abstrak".
 *
 * The followings are the available columns in table 'abstrakartikel':
 * @property integer $idartikel
 * @property integer $idpendseminar
 * @property string $namaaartikel
 * @property string $fileartikel
 * @property string $tgluploadartikel
 * @property integer $statusartikel
 *
 * The followings are the available model relations:
 * @property Pemakalah $idpemakalah0
 */
class Artikel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'artikel';
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
			array('idartikel, idpendseminar, statusartikel', 'numerical', 'integerOnly'=>true),
			array('namaartikel, fileartikel', 'length', 'max'=>100),
			array('tgluploadartikel', 'safe'),
                    
                        array('fileartikel','file','types'=>'pdf,doc,docx', 'allowEmpty'=>false, 'on'=>'create'),
			array('fileartikel','file','types'=>'pdf,doc,docx', 'allowEmpty'=>true, 'on'=>'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idartikel, idpendseminar, namaartikel, fileartikel, tgluploadartikel, statusartikel', 'safe', 'on'=>'search'),
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
			'idartikel' => 'Id',
			'idpendseminar' => 'Pendaftar',
			'namaartikel' => 'Artikel',
			'fileartikel' => 'Upload Artikel',
			'tgluploadartikel' => 'Tanggal Upload Artikel',
			'statusartikel' => 'Status Artikel',
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

		$criteria->compare('idartikel',$this->idartikel);
		$criteria->compare('idpendseminar',$this->idpendseminar);
		$criteria->compare('namaartikel',$this->namaartikel,true);
		$criteria->compare('fileartikel',$this->fileartikel,true);
		$criteria->compare('tgluploadartikel',$this->tgluploadartikel,true);
		$criteria->compare('statusartikel',$this->statusartikel);

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

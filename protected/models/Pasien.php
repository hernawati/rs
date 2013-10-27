<?php

/**
 * This is the model class for table "pasien".
 *
 * The followings are the available columns in table 'pasien':
 * @property string $PAS_NOREKAMMEDIK
 * @property string $ASR_IDASURANSI
 * @property string $PAS_NAMAPASIEN
 * @property string $PAS_TGLLAHIR
 * @property string $PAS_PEKERJAAN
 * @property string $PAS_ALAMAT
 * @property string $PAS_JENISKELAMIN
 * @property string $PAS_STATUSPEMBAYARAN
 * @property string $PAS_TGLPENDAFTARAN
 */
class Pasien extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pasien the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pasien';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PAS_NOREKAMMEDIK', 'required'),
			array('PAS_NOREKAMMEDIK, ASR_IDASURANSI, PAS_JENISKELAMIN', 'length', 'max'=>10),
			array('PAS_NAMAPASIEN', 'length', 'max'=>50),
			array('PAS_PEKERJAAN', 'length', 'max'=>255),
			array('PAS_STATUSPEMBAYARAN', 'length', 'max'=>25),
			array('PAS_TGLLAHIR, PAS_ALAMAT, PAS_TGLPENDAFTARAN', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PAS_NOREKAMMEDIK, ASR_IDASURANSI, PAS_NAMAPASIEN, PAS_TGLLAHIR, PAS_PEKERJAAN, PAS_ALAMAT, PAS_JENISKELAMIN, PAS_STATUSPEMBAYARAN, PAS_TGLPENDAFTARAN', 'safe', 'on'=>'search'),
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
			'pasiens'=>array(self::HAS_MANY,'Rekammedik','PAS_NOREKAMMEDIK'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PAS_NOREKAMMEDIK' => 'Nomor Rekam Medik',
			'ASR_IDASURANSI' => 'Asr Idasuransi',
			'PAS_NAMAPASIEN' => 'Nama Pasien',
			'PAS_TGLLAHIR' => 'Pas Tgllahir',
			'PAS_PEKERJAAN' => 'Pas Pekerjaan',
			'PAS_ALAMAT' => 'Pas Alamat',
			'PAS_JENISKELAMIN' => 'Pas Jeniskelamin',
			'PAS_STATUSPEMBAYARAN' => 'Status Pembayaran',
			'PAS_TGLPENDAFTARAN' => 'Pas Tglpendaftaran',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PAS_NOREKAMMEDIK',$this->PAS_NOREKAMMEDIK,true);
		$criteria->compare('ASR_IDASURANSI',$this->ASR_IDASURANSI,true);
		$criteria->compare('PAS_NAMAPASIEN',$this->PAS_NAMAPASIEN,true);
		$criteria->compare('PAS_TGLLAHIR',$this->PAS_TGLLAHIR,true);
		$criteria->compare('PAS_PEKERJAAN',$this->PAS_PEKERJAAN,true);
		$criteria->compare('PAS_ALAMAT',$this->PAS_ALAMAT,true);
		$criteria->compare('PAS_JENISKELAMIN',$this->PAS_JENISKELAMIN,true);
		$criteria->compare('PAS_STATUSPEMBAYARAN',$this->PAS_STATUSPEMBAYARAN,true);
		$criteria->compare('PAS_TGLPENDAFTARAN',$this->PAS_TGLPENDAFTARAN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
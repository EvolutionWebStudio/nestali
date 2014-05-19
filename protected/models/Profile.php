<?php

/**
 * This is the model class for table "profile".
 *
 * The followings are the available columns in table 'profile':
 * @property integer $id
 * @property string $name_surname
 * @property string $description
 * @property string $published_date
 * @property string $last_seen_date
 * @property integer $is_missing
 * @property string $image
 * @property integer $contact_id
 * @property integer $city_ptt
 * @property string $last_seen_destination
 *
 * The followings are the available model relations:
 * @property Contact $contact
 * @property City $cityPtt
 */
class Profile extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_id, city_ptt, name_surname', 'required'),
			array('is_missing, contact_id, city_ptt', 'numerical', 'integerOnly'=>true),
			array('name_surname, last_seen_destination', 'length', 'max'=>120),
			array('description', 'length', 'max'=>255),
			array('image', 'file', 'types'=>'jpg, gif, png', 'allowEmpty'=>true, 'message'=>Yii::t('common', 'form.field.email')),

			array('published_date, last_seen_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name_surname, description, published_date, last_seen_date, is_missing, image, contact_id, city_ptt, last_seen_destination', 'safe', 'on'=>'search'),
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
			'contact' => array(self::BELONGS_TO, 'Contact', 'contact_id'),
			'cityPtt' => array(self::BELONGS_TO, 'City', 'city_ptt'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name_surname' => 'Ime i Prezime',
			'description' => 'Dodatne informacije',
			'published_date' => 'Datum objave',
			'last_seen_date' => 'Datum',
			'is_missing' => 'Is Missing',
			'image' => 'Slika',
			'contact_id' => 'Kontakt',
			'city_ptt' => 'Grad',
			'last_seen_destination' => 'Poslednja poznata lokacija',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name_surname',$this->name_surname,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('published_date',$this->published_date,true);
		$criteria->compare('last_seen_date',$this->last_seen_date,true);
		$criteria->compare('is_missing',$this->is_missing);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('contact_id',$this->contact_id);
		$criteria->compare('city_ptt',$this->city_ptt);
		$criteria->compare('last_seen_destination',$this->last_seen_destination,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profile the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

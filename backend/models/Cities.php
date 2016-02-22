<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property string $country_code
 * @property string $city_code
 * @property string $city_name
 *
 * @property Country $countryCode
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_code', 'city_code', 'city_name'], 'required'],
            [['country_code', 'city_code'], 'string', 'max' => 2],
            [['city_name'], 'string', 'max' => 40]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'country_code' => Yii::t('core', 'Country Code'),
            'city_code' => Yii::t('core', 'City Code'),
            'city_name' => Yii::t('core', 'City Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['code' => 'country_code']);
    }

    /**
     * @inheritdoc
     * @return CitiesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CitiesQuery(get_called_class());
    }
}

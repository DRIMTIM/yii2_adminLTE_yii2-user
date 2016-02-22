<?php

namespace backend\models;

use backend\models\BaseActiveRecord;
use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $code
 * @property string $name
 * @property integer $population
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Cities[] $cities
 */
class Country extends BaseActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['population', 'created_at', 'updated_at'], 'integer'],
            [['code'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 52]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => Yii::t('core', 'Code'),
            'name' => Yii::t('core', 'Name'),
            'population' => Yii::t('core', 'Population'),
            'created_at' => Yii::t('core', 'Created At'),
            'updated_at' => Yii::t('core', 'Updated At'),
        ];
    }

    public function attributes()
    {
        // add related fields to searchable attributes
        return array_merge(parent::attributes(), ['cities.city_name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(Cities::className(), ['country_code' => 'code']);
    }

    /**
     * @inheritdoc
     * @return CountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CountryQuery(get_called_class());
    }
}

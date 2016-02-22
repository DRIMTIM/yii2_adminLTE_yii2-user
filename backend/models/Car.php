<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_car".
 *
 * @property integer $user_id
 * @property string $matricula
 * @property string $marca
 * @property string $modelo
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_car';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'matricula', 'marca', 'modelo'], 'required'],
            [['user_id'], 'integer'],
            [['modelo'], 'string'],
            [['matricula', 'marca'], 'string', 'max' => 56],
            [['matricula'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'matricula' => 'Matricula',
            'marca' => 'Marca',
            'modelo' => 'Modelo',
        ];
    }
}

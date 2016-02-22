<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property string $name
 * @property integer $quantity
 * @property double $price
 */
class Pedidos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'quantity', 'price'], 'required'],
            [['quantity'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'quantity' => 'Quantity',
            'price' => 'Price',
        ];
    }
}

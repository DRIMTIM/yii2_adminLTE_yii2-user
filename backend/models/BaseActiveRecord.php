<?php

namespace backend\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "country".
 *
 * @property string $code
 * @property string $name
 * @property integer $population
 */
class BaseActiveRecord extends ActiveRecord
{

	public function behaviors()
    {

        return ArrayHelper::merge(parent::behaviors(),        
            [
                TimestampBehavior::className(),
            ]
        );
    }
}
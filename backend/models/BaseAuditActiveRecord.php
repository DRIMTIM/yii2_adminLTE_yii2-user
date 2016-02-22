<?php

namespace backend\models;

use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use Yii;

/**
 * This is the model class for all tables 
 * that want to use a Behaviour.
 *
 * @property string $id
 * @property string $id_grade
 * @property string $id_user
 * @property string $name
 * @property string $modified
 * @property string $created
 *
 * @property AsmtClassSetting[] $asmtClassSettings
 * @property Grade $idGrade
 * @property User $idUser
 * @property AsmtClassroomProgram[] $asmtClassroomPrograms
 * @property Program[] $idPrograms
 * @property Enrollment[] $enrollments
 */
class BaseAuditActiveRecord extends ActiveRecord
{
 
 public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ]
            ],

            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by'
            ]
        ];
     }
 
}

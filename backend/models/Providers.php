<?php

namespace backend\models;

use backend\models\BaseAuditActiveRecord;

use Yii;

/**
 * This is the model class for table "providers".
 *
 * @property integer $id_prov
 * @property string $email_prov
 * @property string $name_prov
 * @property string $phone_prov
 * @property string $address_prov
 * @property integer $id_con
 * @property string $score_prov
 * @property string $datetime_added_prov
 *
 * @property BranchOffices[] $branchOffices
 * @property ProviderUsers[] $providerUsers
 * @property Contacts $idCon
 */
class Providers extends BaseAuditActiveRecord/*\yii\db\ActiveRecord*/
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'providers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email_prov', 'name_prov', 'phone_prov', 'address_prov', 'id_con'], 'required'],
            [['email_prov', 'name_prov', 'phone_prov', 'address_prov'], 'string'],
            [['id_con'], 'integer'],
            [['score_prov'], 'number'],
            [['datetime_added_prov'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prov' => 'Id Prov',
            'email_prov' => 'Email Prov',
            'name_prov' => 'Name Prov',
            'phone_prov' => 'Phone Prov',
            'address_prov' => 'Address Prov',
            'id_con' => 'Id Con',
            'score_prov' => 'Score Prov',
            'datetime_added_prov' => 'Datetime Added Prov',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranchOffices()
    {
        return $this->hasMany(BranchOffices::className(), ['id_prov' => 'id_prov']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProviderUsers()
    {
        return $this->hasMany(ProviderUsers::className(), ['id_prov' => 'id_prov']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCon()
    {
        return $this->hasOne(Contacts::className(), ['id_con' => 'id_con']);
    }
}

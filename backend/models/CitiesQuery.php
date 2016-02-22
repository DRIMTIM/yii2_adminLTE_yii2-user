<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Cities]].
 *
 * @see Cities
 */
class CitiesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Cities[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Cities|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
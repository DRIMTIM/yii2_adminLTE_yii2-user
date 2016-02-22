<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cities;

/**
 * CitiesSearch represents the model behind the search form about `backend\models\Cities`.
 */
class CitiesSearch extends Cities
{
    // add the public attributes that will be used to store the data to be search
    public $country;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_code', 'city_code', 'city_name', 'country'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cities::find();//->with('country');

        $query->joinWith(['country']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // Lets do the same with country now
        $dataProvider->sort->attributes['country'] = [
            'asc' => ['country.name' => SORT_ASC],
            'desc' => ['country.name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'country_code', $this->country_code])
            ->andFilterWhere(['like', 'city_code', $this->city_code])
            ->andFilterWhere(['like', 'city_name', $this->city_name]);

        $query->andFilterWhere(['like', 'country.name', $this->country]);

        return $dataProvider;
    }
}

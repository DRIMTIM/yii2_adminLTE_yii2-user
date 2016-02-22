<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Providers;

/**
 * ProvidersSearch represents the model behind the search form about `backend\models\Providers`.
 */
class ProvidersSearch extends Providers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prov', 'id_con'], 'integer'],
            [['email_prov', 'name_prov', 'phone_prov', 'address_prov', 'datetime_added_prov'], 'safe'],
            [['score_prov'], 'number'],
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
        $query = Providers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id_prov' => $this->id_prov,
            'id_con' => $this->id_con,
            'score_prov' => $this->score_prov,
            'datetime_added_prov' => $this->datetime_added_prov,
        ]);

        $query->andFilterWhere(['like', 'email_prov', $this->email_prov])
            ->andFilterWhere(['like', 'name_prov', $this->name_prov])
            ->andFilterWhere(['like', 'phone_prov', $this->phone_prov])
            ->andFilterWhere(['like', 'address_prov', $this->address_prov]);

        return $dataProvider;
    }
}

<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Consumer;

/**
 * ConsumerSearch represents the model behind the search form of `common\models\Consumer`.
 */
class ConsumerSearch extends Consumer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'home_based', 'federal_tax_id'], 'integer'],
            [['business_legal_name', 'business_dba_name', 'business_structure', 'business_legal_address', 'city', 'state', 'zip', 'business_physical_address', 'pcity', 'pstate', 'pzip', 'merchant_duns_number', 'first_name', 'middle_name', 'telephone_number', 'toll_free_number', 'fax_number', 'mobile_number', 'email_address', 'created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Consumer::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'home_based' => $this->home_based,
            'federal_tax_id' => $this->federal_tax_id,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'business_legal_name', $this->business_legal_name])
            ->andFilterWhere(['like', 'business_dba_name', $this->business_dba_name])
            ->andFilterWhere(['like', 'business_structure', $this->business_structure])
            ->andFilterWhere(['like', 'business_legal_address', $this->business_legal_address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'business_physical_address', $this->business_physical_address])
            ->andFilterWhere(['like', 'pcity', $this->pcity])
            ->andFilterWhere(['like', 'pstate', $this->pstate])
            ->andFilterWhere(['like', 'pzip', $this->pzip])
            ->andFilterWhere(['like', 'merchant_duns_number', $this->merchant_duns_number])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'telephone_number', $this->telephone_number])
            ->andFilterWhere(['like', 'toll_free_number', $this->toll_free_number])
            ->andFilterWhere(['like', 'fax_number', $this->fax_number])
            ->andFilterWhere(['like', 'mobile_number', $this->mobile_number])
            ->andFilterWhere(['like', 'email_address', $this->email_address]);

        return $dataProvider;
    }
}

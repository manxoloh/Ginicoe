<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Merchant;

/**
 * MerchantSearch represents the model behind the search form of `common\models\Merchant`.
 */
class MerchantSearch extends Merchant
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'social_security_number', 'have_you_lived_at_this_address_for_2_years_or_more', 'how_many_people_are_in_your_household', 'you_own_a_second_or_investment_property'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'date_of_birth', 'primary_telephone_number', 'alternate_telephone_number', 'physical_house_number_of_primary_residence', 'street_name', 'urbanization_name', 'state', 'city', 'zip_code', 'physical_house_number_of_previous_primary_esidence', 'pstreet_name', 'purbanization_name', 'pstate', 'pcity', 'pzip_code'], 'safe'],
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
        $query = Merchant::find();

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
            'social_security_number' => $this->social_security_number,
            'have_you_lived_at_this_address_for_2_years_or_more' => $this->have_you_lived_at_this_address_for_2_years_or_more,
            'how_many_people_are_in_your_household' => $this->how_many_people_are_in_your_household,
            'you_own_a_second_or_investment_property' => $this->you_own_a_second_or_investment_property,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'date_of_birth', $this->date_of_birth])
            ->andFilterWhere(['like', 'primary_telephone_number', $this->primary_telephone_number])
            ->andFilterWhere(['like', 'alternate_telephone_number', $this->alternate_telephone_number])
            ->andFilterWhere(['like', 'physical_house_number_of_primary_residence', $this->physical_house_number_of_primary_residence])
            ->andFilterWhere(['like', 'street_name', $this->street_name])
            ->andFilterWhere(['like', 'urbanization_name', $this->urbanization_name])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'zip_code', $this->zip_code])
            ->andFilterWhere(['like', 'physical_house_number_of_previous_primary_esidence', $this->physical_house_number_of_previous_primary_esidence])
            ->andFilterWhere(['like', 'pstreet_name', $this->pstreet_name])
            ->andFilterWhere(['like', 'purbanization_name', $this->purbanization_name])
            ->andFilterWhere(['like', 'pstate', $this->pstate])
            ->andFilterWhere(['like', 'pcity', $this->pcity])
            ->andFilterWhere(['like', 'pzip_code', $this->pzip_code]);

        return $dataProvider;
    }
}

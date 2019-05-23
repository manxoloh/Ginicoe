<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OwnershipInformation;

/**
 * OwnershipInformationSearch represents the model behind the search form of `common\models\OwnershipInformation`.
 */
class OwnershipInformationSearch extends OwnershipInformation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['owner_id', 'customer_id', 'number_of_employees', 'physical_address', 'industry'], 'integer'],
            [['owner_partner', 'first_name', 'middle_name', 'social_security_number', 'title_in_business', 'telephone_number', '3ownership_percentage', 'dob', 'home_address', 'city', 'state', 'zip', 'merchant_bank', 'account_manager_fn', 'pcity', 'pstate', 'pzip', 'account_manager_email_address'], 'safe'],
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
        $query = OwnershipInformation::find();

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
            'owner_id' => $this->owner_id,
            'dob' => $this->dob,
            'customer_id' => $this->customer_id,
            'number_of_employees' => $this->number_of_employees,
            'physical_address' => $this->physical_address,
            'industry' => $this->industry,
        ]);

        $query->andFilterWhere(['like', 'owner_partner', $this->owner_partner])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'social_security_number', $this->social_security_number])
            ->andFilterWhere(['like', 'title_in_business', $this->title_in_business])
            ->andFilterWhere(['like', 'telephone_number', $this->telephone_number])
            ->andFilterWhere(['like', '3ownership_percentage', $this->3ownership_percentage])
            ->andFilterWhere(['like', 'home_address', $this->home_address])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'zip', $this->zip])
            ->andFilterWhere(['like', 'merchant_bank', $this->merchant_bank])
            ->andFilterWhere(['like', 'account_manager_fn', $this->account_manager_fn])
            ->andFilterWhere(['like', 'pcity', $this->pcity])
            ->andFilterWhere(['like', 'pstate', $this->pstate])
            ->andFilterWhere(['like', 'pzip', $this->pzip])
            ->andFilterWhere(['like', 'account_manager_email_address', $this->account_manager_email_address]);

        return $dataProvider;
    }
}

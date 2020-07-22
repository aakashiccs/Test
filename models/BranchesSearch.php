<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Branches;

/**
 * BranchesSearch represents the model behind the search form of `app\models\Branches`.
 */
class BranchesSearch extends Branches
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Country', 'Branch_name', 'Branch_Address', 'Branch_status'], 'safe'],
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
        $query = Branches::find();

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
        ]);

        $query->andFilterWhere(['like', 'Country', $this->Country])
            ->andFilterWhere(['like', 'Branch_name', $this->Branch_name])
            ->andFilterWhere(['like', 'Branch_Address', $this->Branch_Address])
            ->andFilterWhere(['like', 'Branch_status', $this->Branch_status]);

        return $dataProvider;
    }
}

<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BidangPengendalian;


class BidangPengendalianSearch extends BidangPengendalian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengendalian'], 'integer'],
            [['nama', 'lokasi', 'tahun', 'file'], 'safe'],
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
        $query = BidangPengendalian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 15,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
      // grid filtering conditions
      $query->andFilterWhere([
        'id_pengendalian' => $this->id_pengendalian,
    ]);

    $query->andFilterWhere(['like', 'nama', $this->nama])
        ->andFilterWhere(['like', 'lokasi', $this->lokasi])
        ->andFilterWhere(['like', 'file', $this->file])
        ->andFilterWhere(['like', 'tahun', $this->tahun]);

        return $dataProvider;
    }
}
<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Surat;

/**
 * SuratSearch represents the model behind the search form of `frontend\models\Surat`.
 */
class SuratSearch extends Surat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_surat'], 'integer'],
            [['surat_izin', 'surat_keluar'], 'safe'],
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
        $query = Surat::find();

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
            'id_surat' => $this->id_surat,
        ]);

        $query->andFilterWhere(['like', 'surat_izin', $this->surat_izin])
            ->andFilterWhere(['like', 'surat_keluar', $this->surat_keluar]);

        return $dataProvider;
    }
}

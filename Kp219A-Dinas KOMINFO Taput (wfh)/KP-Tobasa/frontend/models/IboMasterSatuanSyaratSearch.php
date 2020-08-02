<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IboMasterSatuanSyarat;

/**
 * IboMasterSatuanSyaratSearch represents the model behind the search form of `frontend\models\IboMasterSatuanSyarat`.
 */
class IboMasterSatuanSyaratSearch extends IboMasterSatuanSyarat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by', 'active'], 'integer'],
            [['nama', 'deskripsi', 'waktu_penyelesaian', 'retribusi', 'upload_file', 'created_at', 'updated_at'], 'safe'],
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
        $query = IboMasterSatuanSyarat::find();

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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'waktu_penyelesaian', $this->waktu_penyelesaian])
            ->andFilterWhere(['like', 'retribusi', $this->retribusi])
            ->andFilterWhere(['like', 'upload_file', $this->upload_file]);

        return $dataProvider;
    }
}

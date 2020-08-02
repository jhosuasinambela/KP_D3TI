<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IboLandasanHukum;

/**
 * IboLandasanHukumSearch represents the model behind the search form of `frontend\models\IboLandasanHukum`.
 */
class IboLandasanHukumSearch extends IboLandasanHukum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ibo_landasan_hukum', 'published', 'created_by', 'updated_by', 'active'], 'integer'],
            [['nama_landasan_hukum', 'nama_singkatan', 'retribusi', 'upload_file', 'created_at', 'updated_at'], 'safe'],
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
        $query = IboLandasanHukum::find();

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
            'id_ibo_landasan_hukum' => $this->id_ibo_landasan_hukum,
            'published' => $this->published,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'nama_landasan_hukum', $this->nama_landasan_hukum])
            ->andFilterWhere(['like', 'nama_singkatan', $this->nama_singkatan])
            ->andFilterWhere(['like', 'retribusi', $this->retribusi])
            ->andFilterWhere(['like', 'upload_file', $this->upload_file]);

        return $dataProvider;
    }
}

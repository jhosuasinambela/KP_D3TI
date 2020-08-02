<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IboMasterIzin;

/**
 * IboMasterIzinSearch represents the model behind the search form of `frontend\models\IboMasterIzin`.
 */
class IboMasterIzinSearch extends IboMasterIzin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master_izin', 'id_kategori_izin', 'id_master_kategori-izin', 'id_master_kategori_izin', 'id_masa_berlaku', 'created_by', 'updated_by', 'active', 'retribusi_status'], 'integer'],
            [['nama', 'deskripsi', 'kode_izin', 'nama_singkat', 'icon', 'created_at', 'updated_at'], 'safe'],
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
        $query = IboMasterIzin::find();

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
            'id_master_izin' => $this->id_master_izin,
            'id_kategori_izin' => $this->id_kategori_izin,
            'id_master_kategori-izin' => $this->id_master_kategori_izin,
            'id_masa_berlaku' => $this->id_masa_berlaku,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
            'retribusi_status' => $this->retribusi_status,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'kode_izin', $this->kode_izin])
            ->andFilterWhere(['like', 'nama_singkat', $this->nama_singkat])
            ->andFilterWhere(['like', 'icon', $this->icon]);

        return $dataProvider;
    }
}

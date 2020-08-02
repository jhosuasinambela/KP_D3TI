<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DefaultPengaduanOnline;

/**
 * DefaultPengaduanOnlineSearch represents the model behind the search form of `frontend\models\DefaultPengaduanOnline`.
 */
class DefaultPengaduanOnlineSearch extends DefaultPengaduanOnline
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_default_pengaduan', 'id_master_pengaduan', 'provinsi', 'id_kab', 'id_kec', 'id_kel', 'urut'], 'integer'],
            [['nama', 'alamat', 'provinsi_text', 'kabupaten_text', 'kecamatan_text', 'kelurahan_text', 'deskripsi_pengaduan', 'tanggal'], 'safe'],
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
        $query = DefaultPengaduanOnline::find();

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
            'id_default_pengaduan' => $this->id_default_pengaduan,
            'id_master_pengaduan' => $this->id_master_pengaduan,
            'provinsi' => $this->provinsi,
            'id_kab' => $this->id_kab,
            'id_kec' => $this->id_kec,
            'id_kel' => $this->id_kel,
            'urut' => $this->urut,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'provinsi_text', $this->provinsi_text])
            ->andFilterWhere(['like', 'kabupaten_text', $this->kabupaten_text])
            ->andFilterWhere(['like', 'kecamatan_text', $this->kecamatan_text])
            ->andFilterWhere(['like', 'kelurahan_text', $this->kelurahan_text])
            ->andFilterWhere(['like', 'deskripsi_pengaduan', $this->deskripsi_pengaduan]);

        return $dataProvider;
    }
}

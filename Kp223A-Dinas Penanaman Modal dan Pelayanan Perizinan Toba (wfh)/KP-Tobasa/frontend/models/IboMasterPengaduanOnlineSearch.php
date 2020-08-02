<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\IboMasterPengaduanOnline;

/**
 * IboMasterPengaduanOnlineSearch represents the model behind the search form of `frontend\models\IboMasterPengaduanOnline`.
 */
class IboMasterPengaduanOnlineSearch extends IboMasterPengaduanOnline
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_master_jenis_pengaduan', 'konfirmasi_kasie', 'konfirmasi_kabid', 'konfirmasi_sekretaris', 'konfirmasi_kadis', 'proses_selesai'], 'integer'],
            [['nama', 'no_hp', 'email', 'alamat', 'deskripsi_pengaduan', 'detail_kasie', 'detail_kabid', 'detail_sekretaris', 'detail_kadis', 'kesimpulan', 'file_pendukung', 'alasan_kasie', 'alasan_kabid', 'alasan_sekretaris', 'created_at', 'updated_at'], 'safe'],
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
        $query = IboMasterPengaduanOnline::find();

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
            'id_master_jenis_pengaduan' => $this->id_master_jenis_pengaduan,
            'konfirmasi_kasie' => $this->konfirmasi_kasie,
            'konfirmasi_kabid' => $this->konfirmasi_kabid,
            'konfirmasi_sekretaris' => $this->konfirmasi_sekretaris,
            'konfirmasi_kadis' => $this->konfirmasi_kadis,
            'proses_selesai' => $this->proses_selesai,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_hp', $this->no_hp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'deskripsi_pengaduan', $this->deskripsi_pengaduan])
            ->andFilterWhere(['like', 'detail_kasie', $this->detail_kasie])
            ->andFilterWhere(['like', 'detail_kabid', $this->detail_kabid])
            ->andFilterWhere(['like', 'detail_sekretaris', $this->detail_sekretaris])
            ->andFilterWhere(['like', 'detail_kadis', $this->detail_kadis])
            ->andFilterWhere(['like', 'kesimpulan', $this->kesimpulan])
            ->andFilterWhere(['like', 'file_pendukung', $this->file_pendukung])
            ->andFilterWhere(['like', 'alasan_kasie', $this->alasan_kasie])
            ->andFilterWhere(['like', 'alasan_kabid', $this->alasan_kabid])
            ->andFilterWhere(['like', 'alasan_sekretaris', $this->alasan_sekretaris]);

        return $dataProvider;
    }
}

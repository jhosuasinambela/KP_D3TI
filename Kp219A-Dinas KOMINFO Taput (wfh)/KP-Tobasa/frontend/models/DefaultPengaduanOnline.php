<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "default_pengaduan_online".
 *
 * @property int $id_default_pengaduan
 * @property int|null $id_master_pengaduan
 * @property string $nama
 * @property string $alamat
 * @property int|null $provinsi
 * @property string|null $provinsi_text
 * @property int|null $id_kab
 * @property string|null $kabupaten_text
 * @property int|null $id_kec
 * @property string|null $kecamatan_text
 * @property int|null $id_kel
 * @property string|null $kelurahan_text
 * @property string|null $deskripsi_pengaduan
 * @property int|null $urut
 * @property string|null $tanggal
 */
class DefaultPengaduanOnline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'default_pengaduan_online';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_default_pengaduan', 'nama', 'alamat'], 'required'],
            [['id_default_pengaduan', 'id_master_pengaduan', 'provinsi', 'id_kab', 'id_kec', 'id_kel', 'urut'], 'integer'],
            [['tanggal'], 'safe'],
            [['nama'], 'string', 'max' => 200],
            [['alamat', 'deskripsi_pengaduan'], 'string', 'max' => 500],
            [['provinsi_text', 'kabupaten_text', 'kecamatan_text', 'kelurahan_text'], 'string', 'max' => 150],
            [['id_default_pengaduan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_default_pengaduan' => 'Id Default Pengaduan',
            'id_master_pengaduan' => 'Id Master Pengaduan',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'provinsi' => 'Provinsi',
            'provinsi_text' => 'Provinsi Text',
            'id_kab' => 'Id Kab',
            'kabupaten_text' => 'Kabupaten Text',
            'id_kec' => 'Id Kec',
            'kecamatan_text' => 'Kecamatan Text',
            'id_kel' => 'Id Kel',
            'kelurahan_text' => 'Kelurahan Text',
            'deskripsi_pengaduan' => 'Deskripsi Pengaduan',
            'urut' => 'Urut',
            'tanggal' => 'Tanggal',
        ];
    }
}

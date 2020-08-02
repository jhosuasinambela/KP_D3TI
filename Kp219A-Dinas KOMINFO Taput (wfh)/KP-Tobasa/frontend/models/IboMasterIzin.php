<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ibo_master_izin".
 *
 * @property int $id_master_izin
 * @property int $id_kategori_izin
 * @property int $id_master_kategori-izin
 * @property string $nama
 * @property string $deskripsi
 * @property string $kode_izin
 * @property string $nama_singkat
 * @property string|null $icon
 * @property int $id_master_kategori_izin
 * @property int $id_masa_berlaku
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $active
 * @property int $retribusi_status
 *
 * @property IboDeskripsiSertifikat[] $iboDeskripsiSertifikats
 */
class IboMasterIzin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ibo_master_izin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_master_izin', 'id_kategori_izin', 'id_master_kategori-izin', 'nama', 'deskripsi', 'kode_izin', 'nama_singkat', 'id_master_kategori_izin', 'id_masa_berlaku', 'created_at', 'updated_at', 'created_by', 'updated_by', 'retribusi_status'], 'required'],
            [['id_master_izin', 'id_kategori_izin', 'id_master_kategori-izin', 'id_master_kategori_izin', 'id_masa_berlaku', 'created_by', 'updated_by', 'active', 'retribusi_status'], 'integer'],
            [['deskripsi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama'], 'string', 'max' => 255],
            [['kode_izin', 'nama_singkat', 'icon'], 'string', 'max' => 1000],
            [['id_master_izin'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_master_izin' => 'Id Master Izin',
            'id_kategori_izin' => 'Id Kategori Izin',
            'id_master_kategori-izin' => 'Id Master Kategori Izin',
            'nama' => 'Nama',
            'deskripsi' => 'Deskripsi',
            'kode_izin' => 'Kode Izin',
            'nama_singkat' => 'Nama Singkat',
            'icon' => 'Icon',
            'id_master_kategori_izin' => 'Id Master Kategori Izin',
            'id_masa_berlaku' => 'Id Masa Berlaku',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
            'retribusi_status' => 'Retribusi Status',
        ];
    }

    /**
     * Gets query for [[IboDeskripsiSertifikats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIboDeskripsiSertifikats()
    {
        return $this->hasMany(IboDeskripsiSertifikat::className(), ['id_master_izin' => 'id_master_izin']);
    }
}

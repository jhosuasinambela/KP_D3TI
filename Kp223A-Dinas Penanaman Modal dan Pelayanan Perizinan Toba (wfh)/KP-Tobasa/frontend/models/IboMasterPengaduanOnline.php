<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ibo_master_pengaduan_online".
 *
 * @property int $id
 * @property int $id_master_jenis_pengaduan
 * @property string $nama
 * @property string $no_hp
 * @property string|null $email
 * @property string $alamat
 * @property string $deskripsi_pengaduan
 * @property int|null $konfirmasi_kasie
 * @property string|null $detail_kasie
 * @property int|null $konfirmasi_kabid
 * @property string|null $detail_kabid
 * @property int|null $konfirmasi_sekretaris
 * @property string|null $detail_sekretaris
 * @property int|null $konfirmasi_kadis
 * @property string|null $detail_kadis
 * @property int|null $proses_selesai
 * @property string|null $kesimpulan
 * @property string|null $file_pendukung
 * @property string|null $alasan_kasie
 * @property string|null $alasan_kabid
 * @property string|null $alasan_sekretaris
 * @property string|null $created_at
 * @property string|null $updated_at
 */
class IboMasterPengaduanOnline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ibo_master_pengaduan_online';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_master_jenis_pengaduan', 'nama', 'no_hp', 'alamat', 'deskripsi_pengaduan'], 'required'],
            [['id', 'id_master_jenis_pengaduan', 'konfirmasi_kasie', 'konfirmasi_kabid', 'konfirmasi_sekretaris', 'konfirmasi_kadis', 'proses_selesai'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama', 'file_pendukung'], 'string', 'max' => 255],
            [['no_hp'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['alamat'], 'string', 'max' => 500],
            [['deskripsi_pengaduan', 'detail_kasie', 'detail_kabid', 'detail_sekretaris', 'detail_kadis', 'kesimpulan', 'alasan_kasie', 'alasan_kabid', 'alasan_sekretaris'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_master_jenis_pengaduan' => 'Id Master Jenis Pengaduan',
            'nama' => 'Nama',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'deskripsi_pengaduan' => 'Deskripsi Pengaduan',
            'konfirmasi_kasie' => 'Konfirmasi Kasie',
            'detail_kasie' => 'Detail Kasie',
            'konfirmasi_kabid' => 'Konfirmasi Kabid',
            'detail_kabid' => 'Detail Kabid',
            'konfirmasi_sekretaris' => 'Konfirmasi Sekretaris',
            'detail_sekretaris' => 'Detail Sekretaris',
            'konfirmasi_kadis' => 'Konfirmasi Kadis',
            'detail_kadis' => 'Detail Kadis',
            'proses_selesai' => 'Proses Selesai',
            'kesimpulan' => 'Kesimpulan',
            'file_pendukung' => 'File Pendukung',
            'alasan_kasie' => 'Alasan Kasie',
            'alasan_kabid' => 'Alasan Kabid',
            'alasan_sekretaris' => 'Alasan Sekretaris',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}

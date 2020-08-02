<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ibo_master_satuan_syarat".
 *
 * @property int $id
 * @property string $nama
 * @property string $deskripsi
 * @property string $waktu_penyelesaian
 * @property string $retribusi
 * @property string $upload_file
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $active
 */
class IboMasterSatuanSyarat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ibo_master_satuan_syarat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'deskripsi', 'waktu_penyelesaian', 'retribusi', 'upload_file'], 'required'],
            [['deskripsi'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'active'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['waktu_penyelesaian', 'retribusi', 'upload_file'], 'string', 'max' => 250],
            [['upload_file'], 'file','skipOnEmpty'=>TRUE,'extensions'=>'pdf']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Izin',
            'deskripsi' => 'Nama Singkat Izin',
            'waktu_penyelesaian' => 'Waktu Penyelesaian',
            'retribusi' => 'Retribusi',
            'upload_file' => 'Upload File',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'active' => 'Active',
        ];
    }
}

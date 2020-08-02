<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ibo_landasan_hukum".
 *
 * @property int $id_ibo_landasan_hukum
 * @property string $nama_landasan_hukum
 * @property string $nama_singkatan
 * @property int $published
 * @property string $retribusi
 * @property string $upload_file
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property int|null $created_by
 * @property int|null $updated_by
 * @property int|null $active
 */
class IboLandasanHukum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ibo_landasan_hukum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_landasan_hukum', 'nama_singkatan', 'published', 'retribusi', 'upload_file'], 'required'],
            [['published', 'created_by', 'updated_by', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['nama_landasan_hukum', 'nama_singkatan'], 'string', 'max' => 255],
            [['retribusi'], 'string', 'max' => 100],
            [['upload_file'], 'file','skipOnEmpty'=>TRUE,'extensions'=>'pdf']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ibo_landasan_hukum' => 'Id Ibo Landasan Hukum',
            'nama_landasan_hukum' => 'Nama Izin',
            'nama_singkatan' => 'Nama Singkatan',
            'published' => 'Waktu Penyelesain',
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

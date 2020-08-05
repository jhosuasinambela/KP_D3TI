<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengendalian".
 *
 * @property int $id_pengendalian
 * @property string $nama
 * @property string $lokasi
 * @property string $tahun
 * @property string $file
 * @property string $filepath
 */
class Pengendalian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengendalian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'lokasi', 'tahun', 'file', 'filepath'], 'required'],
            [['tahun'], 'safe'],
            [['nama', 'lokasi', 'file', 'filepath'], 'string', 'max' => 455],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengendalian' => 'Id Pengendalian',
            'nama' => 'Nama',
            'lokasi' => 'Lokasi',
            'tahun' => 'Tanggal',
            'file' => 'File',
            'filepath' => 'Filepath',
        ];
    }
}

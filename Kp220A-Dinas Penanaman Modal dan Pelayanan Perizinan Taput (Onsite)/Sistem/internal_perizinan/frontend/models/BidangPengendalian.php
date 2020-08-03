<?php

namespace frontend\models;

use Yii;


class BidangPengendalian extends \yii\db\ActiveRecord
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
            [['nama', 'lokasi','tahun', 'file'], 'required'],
            [['nama', 'lokasi'], 'string', 'max' => 455],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'gif, jpg, png, pdf, doc, docx', 'maxFiles' => 10],
            [['tahun'], 'string', 'max' => 255],
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
            'tahun' => 'Tahun',
            'file' => 'File',
        ];
    }
}
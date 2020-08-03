<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sekretariat".
 *
 * @property int $id_sekretariat
 * @property string $no_surat
 * @property string $pengirim
 * @property string $tanggal
 * @property string $perihal
 */
class Sekretariat extends \yii\db\ActiveRecord
{
   /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sekretariat';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_surat','jenis_surat', 'pengirim', 'tanggal', 'perihal', 'file'], 'required'],
            [['tanggal'], 'safe'],
            [['no_surat','jenis_surat', 'pengirim', 'perihal'], 'string', 'max' => 455],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'gif, jpg, png, pdf, doc, docx', 'maxFiles' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_sekretariat' => 'Id Sekretariat',
            'no_surat' => 'No Surat',
            'jenis_surat'=> 'Jenis Surat',
            'pengirim' => 'Pengirim',
            'tanggal' => 'Tanggal',
            'perihal' => 'Perihal',
            'file' => 'File',
        ];
    }
}

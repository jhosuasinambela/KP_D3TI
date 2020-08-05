<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "surat".
 *
 * @property int $id_surat
 * @property string $surat_izin
 * @property string $surat_keluar
 */
class Surat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surat_izin', 'surat_keluar'], 'required'],
            [['surat_izin', 'surat_keluar'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_surat' => 'Id Surat',
            'surat_izin' => 'Surat Izin',
            'surat_keluar' => 'Surat Keluar',
        ];
    }
}

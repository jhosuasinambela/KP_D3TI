<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "izin".
 *
 * @property int $id_izin
 * @property string $izin
 */
class Izin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'izin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['izin'], 'required'],
            [['izin'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_izin' => 'Id Izin',
            'izin' => 'Izin',
        ];
    }
}

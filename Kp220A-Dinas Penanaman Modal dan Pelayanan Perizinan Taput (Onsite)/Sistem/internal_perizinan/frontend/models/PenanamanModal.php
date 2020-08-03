<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penanaman_modal".
 *
 * @property int $id_penanaman_modal
 */
class PenanamanModal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penanaman_modal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_penanaman_modal' => 'Id Penanaman Modal',
        ];
    }
}

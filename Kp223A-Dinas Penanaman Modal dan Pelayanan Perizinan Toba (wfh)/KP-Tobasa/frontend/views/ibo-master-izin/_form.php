<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterIzin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ibo-master-izin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_master_izin')->textInput() ?>

    <?= $form->field($model, 'id_kategori_izin')->textInput() ?>

    <?= $form->field($model, 'id_master_kategori-izin')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kode_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_singkat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_master_kategori_izin')->textInput() ?>

    <?= $form->field($model, 'id_masa_berlaku')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'retribusi_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

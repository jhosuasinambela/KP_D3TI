<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DefaultPengaduanOnline */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="default-pengaduan-online-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_default_pengaduan')->textInput() ?>

    <?= $form->field($model, 'id_master_pengaduan')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provinsi')->textInput() ?>

    <?= $form->field($model, 'provinsi_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kab')->textInput() ?>

    <?= $form->field($model, 'kabupaten_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kec')->textInput() ?>

    <?= $form->field($model, 'kecamatan_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kel')->textInput() ?>

    <?= $form->field($model, 'kelurahan_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_pengaduan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urut')->textInput() ?>

    <?= $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

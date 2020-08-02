<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DefaultPengaduanOnlineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="default-pengaduan-online-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_default_pengaduan') ?>

    <?= $form->field($model, 'id_master_pengaduan') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'provinsi') ?>

    <?php // echo $form->field($model, 'provinsi_text') ?>

    <?php // echo $form->field($model, 'id_kab') ?>

    <?php // echo $form->field($model, 'kabupaten_text') ?>

    <?php // echo $form->field($model, 'id_kec') ?>

    <?php // echo $form->field($model, 'kecamatan_text') ?>

    <?php // echo $form->field($model, 'id_kel') ?>

    <?php // echo $form->field($model, 'kelurahan_text') ?>

    <?php // echo $form->field($model, 'deskripsi_pengaduan') ?>

    <?php // echo $form->field($model, 'urut') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

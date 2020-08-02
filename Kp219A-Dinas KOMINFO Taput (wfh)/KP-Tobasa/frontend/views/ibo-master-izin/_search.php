<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterIzinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ibo-master-izin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_master_izin') ?>

    <?= $form->field($model, 'id_kategori_izin') ?>

    <?= $form->field($model, 'id_master_kategori-izin') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?php // echo $form->field($model, 'kode_izin') ?>

    <?php // echo $form->field($model, 'nama_singkat') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'id_master_kategori_izin') ?>

    <?php // echo $form->field($model, 'id_masa_berlaku') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'active') ?>

    <?php // echo $form->field($model, 'retribusi_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

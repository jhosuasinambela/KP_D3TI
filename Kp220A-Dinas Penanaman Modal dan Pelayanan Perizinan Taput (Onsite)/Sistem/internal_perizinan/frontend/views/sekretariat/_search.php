<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SekretariatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sekretariat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sekretariat') ?>

    <?= $form->field($model, 'no_surat') ?>

    <?= $form->field($model, 'jenis_surat') ?>

    <?= $form->field($model, 'pengirim') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'perihal') ?>

    <?= $form->field($model, 'file') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

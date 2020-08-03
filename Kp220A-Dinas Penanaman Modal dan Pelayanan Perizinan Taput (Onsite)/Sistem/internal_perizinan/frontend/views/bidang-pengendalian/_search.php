<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BidangPengendalianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidang-pengendalian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengendalian') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'lokasi') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'filepath') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

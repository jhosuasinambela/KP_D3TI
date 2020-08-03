<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\BidangPengendalian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidang-pengendalian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahun')->widget(DatePicker::className(), [
       'options' => ['placeholder' => 'Masukkan tanggal'],
       'pluginOptions' => [
         'autoclose' => true,
         'format' => 'yy/mm/dd'
       ]

     ]);?>

    <?= $form->field($model, 'file[]')->fileInput(['multiple' => 'multiple','accept' => 'file/*']); ?>

   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

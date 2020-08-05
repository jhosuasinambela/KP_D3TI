<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Surat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'surat_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'surat_keluar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

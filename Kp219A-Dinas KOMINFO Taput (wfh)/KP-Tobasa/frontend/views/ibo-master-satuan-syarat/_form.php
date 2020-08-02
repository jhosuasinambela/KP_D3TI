<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterSatuanSyarat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ibo-master-satuan-syarat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'waktu_penyelesaian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'retribusi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upload_file')->fileInput() ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

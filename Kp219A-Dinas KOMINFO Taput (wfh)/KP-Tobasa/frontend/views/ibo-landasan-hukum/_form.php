<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboLandasanHukum */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ibo-landasan-hukum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_landasan_hukum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_singkatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'published')->textInput() ?>

    <?= $form->field($model, 'retribusi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'upload_file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

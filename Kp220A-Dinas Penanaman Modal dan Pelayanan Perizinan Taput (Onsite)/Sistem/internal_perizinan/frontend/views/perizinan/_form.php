<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Izin;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Perizinan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perizinan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_izin')->dropDownList(
                ArrayHelper::map(Izin::find()->all(),'izin','izin'),
                ['prompt'=>'Pilih Jenis Izin']
            ) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file[]')->fileInput(['multiple' => 'multiple','accept' => 'file/*']); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

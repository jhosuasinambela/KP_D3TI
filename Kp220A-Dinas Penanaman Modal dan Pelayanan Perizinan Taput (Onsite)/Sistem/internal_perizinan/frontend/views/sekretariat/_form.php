<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use frontend\models\Surat;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Sekretariat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sekretariat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_surat')->dropDownList(
                ArrayHelper::map(Surat::find()->all(),'surat','surat'),
                ['prompt'=>'Pilih Jenis Surat']
            ) ?>

    <?= $form->field($model, 'pengirim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal')->widget(DatePicker::className(), [
       'options' => ['placeholder' => 'Masukkan tanggal'],
       'pluginOptions' => [
         'autoclose' => true,
         'format' => 'yy/mm/dd'
       ]

     ]);?>

    <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file[]')->fileInput(['multiple' => 'multiple','accept' => 'file/*']); ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Selesai', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    <?= Html::a('Batal', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

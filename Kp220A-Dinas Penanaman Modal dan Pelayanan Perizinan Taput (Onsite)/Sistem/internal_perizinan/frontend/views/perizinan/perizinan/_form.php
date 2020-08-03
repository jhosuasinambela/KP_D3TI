<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Perizinan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perizinan-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'no_izin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_pemilik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

	<!-- <?= $form->field($model, 'file[]')->fileInput(['multiple' => true,'accept' => 'file/*']); ?> -->

	<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Selesai', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    <?= Html::a('Batal', ['index'], ['class' => 'btn btn-danger']) ?>
</div>

    <?php ActiveForm::end(); ?>

</div>
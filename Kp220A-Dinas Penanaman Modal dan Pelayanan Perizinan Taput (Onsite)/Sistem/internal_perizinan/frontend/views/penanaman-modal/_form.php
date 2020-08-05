<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenanamanModal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penanaman-modal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_penanaman_modal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PenanamanModal */

$this->title = 'Update Penanaman Modal: ' . $model->id_penanaman_modal;
$this->params['breadcrumbs'][] = ['label' => 'Penanaman Modals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penanaman_modal, 'url' => ['view', 'id' => $model->id_penanaman_modal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penanaman-modal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

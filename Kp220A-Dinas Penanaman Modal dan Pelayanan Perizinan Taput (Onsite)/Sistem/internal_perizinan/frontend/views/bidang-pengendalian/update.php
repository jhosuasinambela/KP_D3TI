<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BidangPengendalian */

$this->title = 'Update Bidang Pengendalian: ' . $model->id_pengendalian;
$this->params['breadcrumbs'][] = ['label' => 'Bidang Pengendalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengendalian, 'url' => ['view', 'id' => $model->id_pengendalian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bidang-pengendalian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

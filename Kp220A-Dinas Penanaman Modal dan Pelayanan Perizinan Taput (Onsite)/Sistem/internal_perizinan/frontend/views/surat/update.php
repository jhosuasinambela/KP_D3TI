<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Surat */

$this->title = 'Update Surat: ' . $model->id_surat;
$this->params['breadcrumbs'][] = ['label' => 'Surats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_surat, 'url' => ['view', 'id' => $model->id_surat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

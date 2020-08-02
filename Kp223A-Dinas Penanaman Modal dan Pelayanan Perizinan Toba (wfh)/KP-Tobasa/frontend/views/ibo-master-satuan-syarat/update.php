<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterSatuanSyarat */

$this->title = 'Update Ibo Master Satuan Syarat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Satuan Syarats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ibo-master-satuan-syarat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

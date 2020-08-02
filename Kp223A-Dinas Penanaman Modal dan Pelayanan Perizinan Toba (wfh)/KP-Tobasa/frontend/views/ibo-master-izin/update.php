<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterIzin */

$this->title = 'Update Ibo Master Izin: ' . $model->id_master_izin;
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Izins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_master_izin, 'url' => ['view', 'id' => $model->id_master_izin]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ibo-master-izin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

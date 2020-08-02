<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DefaultPengaduanOnline */

$this->title = 'Update Default Pengaduan Online: ' . $model->id_default_pengaduan;
$this->params['breadcrumbs'][] = ['label' => 'Default Pengaduan Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_default_pengaduan, 'url' => ['view', 'id' => $model->id_default_pengaduan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="default-pengaduan-online-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

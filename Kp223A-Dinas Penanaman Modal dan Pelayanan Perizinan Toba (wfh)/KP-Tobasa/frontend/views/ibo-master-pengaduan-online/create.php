<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterPengaduanOnline */

$this->title = 'Create Ibo Master Pengaduan Online';
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Pengaduan Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibo-master-pengaduan-online-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

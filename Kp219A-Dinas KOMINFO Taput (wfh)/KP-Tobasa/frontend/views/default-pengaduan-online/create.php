<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DefaultPengaduanOnline */

$this->title = 'Create Default Pengaduan Online';
$this->params['breadcrumbs'][] = ['label' => 'Default Pengaduan Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="default-pengaduan-online-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

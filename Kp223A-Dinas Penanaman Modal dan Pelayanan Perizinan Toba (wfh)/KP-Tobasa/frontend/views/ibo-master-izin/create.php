<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterIzin */

$this->title = 'Create Ibo Master Izin';
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Izins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibo-master-izin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

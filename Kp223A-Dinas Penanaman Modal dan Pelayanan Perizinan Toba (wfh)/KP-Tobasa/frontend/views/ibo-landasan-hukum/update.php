<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboLandasanHukum */

$this->title = 'Update Ibo Landasan Hukum: ' . $model->id_ibo_landasan_hukum;
$this->params['breadcrumbs'][] = ['label' => 'Ibo Landasan Hukums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ibo_landasan_hukum, 'url' => ['view', 'id' => $model->id_ibo_landasan_hukum]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ibo-landasan-hukum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

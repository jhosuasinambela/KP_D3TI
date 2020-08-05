<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengendalian */

$this->title = 'Update Pengendalian: ' . $model->id_pengendalian;
$this->params['breadcrumbs'][] = ['label' => 'Pengendalians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pengendalian, 'url' => ['view', 'id' => $model->id_pengendalian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pengendalian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

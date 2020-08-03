<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengendalian */

$this->title = 'Kelola Bidang Pengendalian';
$this->params['breadcrumbs'][] = ['label' => 'Bidang Pengendalian', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengendalian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

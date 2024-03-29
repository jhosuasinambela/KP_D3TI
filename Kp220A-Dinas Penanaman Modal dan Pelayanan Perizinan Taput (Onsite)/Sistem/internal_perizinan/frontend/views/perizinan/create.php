<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perizinan */

$this->title = 'Kelola Bidang Perizinan';
$this->params['breadcrumbs'][] = ['label' => 'Bidang Perizinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'izin' => $izin,
    ]) ?>

</div>

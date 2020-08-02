<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterSatuanSyarat */

$this->title = 'Create Ibo Master Satuan Syarat';
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Satuan Syarats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibo-master-satuan-syarat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sekretariat */

$this->title = 'Update Sekretariat: ' . $model->id_sekretariat;
$this->params['breadcrumbs'][] = ['label' => 'Sekretariats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sekretariat, 'url' => ['view', 'id' => $model->id_sekretariat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sekretariat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

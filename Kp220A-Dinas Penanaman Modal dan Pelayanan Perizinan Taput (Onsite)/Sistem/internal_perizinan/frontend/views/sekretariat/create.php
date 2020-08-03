<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sekretariat */

$this->title = 'Kelola Bidang Sekretariat';
$this->params['breadcrumbs'][] = ['label' => 'Bidang Sekretariat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sekretariat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'surat' => $surat,
    ]) ?>

</div>

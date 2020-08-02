<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboLandasanHukum */

$this->title = 'Create Ibo Landasan Hukum';
$this->params['breadcrumbs'][] = ['label' => 'Ibo Landasan Hukums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibo-landasan-hukum-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

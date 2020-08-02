<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboLandasanHukum */

$this->title = $model->id_ibo_landasan_hukum;
$this->params['breadcrumbs'][] = ['label' => 'Ibo Landasan Hukums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ibo-landasan-hukum-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ibo_landasan_hukum], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ibo_landasan_hukum], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_ibo_landasan_hukum',
            'nama_landasan_hukum',
            'nama_singkatan',
            'published',
            'retribusi',
            'upload_file',
            // 'created_at',
            // 'updated_at',
            // 'created_by',
            // 'updated_by',
            // 'active',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterIzin */

$this->title = $model->id_master_izin;
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Izins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ibo-master-izin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_master_izin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_master_izin], [
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
            'id_master_izin',
            'id_kategori_izin',
            'id_master_kategori-izin',
            'nama',
            'deskripsi:ntext',
            'kode_izin',
            'nama_singkat',
            'icon',
            'id_master_kategori_izin',
            'id_masa_berlaku',
            'created_at',
            'updated_at',
            'created_by',
            'updated_by',
            'active',
            'retribusi_status',
        ],
    ]) ?>

</div>

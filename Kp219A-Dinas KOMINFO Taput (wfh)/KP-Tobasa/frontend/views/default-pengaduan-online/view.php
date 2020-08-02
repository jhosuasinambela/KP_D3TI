<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DefaultPengaduanOnline */

$this->title = $model->id_default_pengaduan;
$this->params['breadcrumbs'][] = ['label' => 'Default Pengaduan Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="default-pengaduan-online-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_default_pengaduan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_default_pengaduan], [
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
            'id_default_pengaduan',
            'id_master_pengaduan',
            'nama',
            'alamat',
            'provinsi',
            'provinsi_text',
            'id_kab',
            'kabupaten_text',
            'id_kec',
            'kecamatan_text',
            'id_kel',
            'kelurahan_text',
            'deskripsi_pengaduan',
            'urut',
            'tanggal',
        ],
    ]) ?>

</div>

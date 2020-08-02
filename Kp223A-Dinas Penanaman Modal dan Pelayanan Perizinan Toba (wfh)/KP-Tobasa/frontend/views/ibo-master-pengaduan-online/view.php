<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterPengaduanOnline */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ibo Master Pengaduan Onlines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ibo-master-pengaduan-online-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'id_master_jenis_pengaduan',
            'nama',
            'no_hp',
            'email:email',
            'alamat',
            'deskripsi_pengaduan',
            'konfirmasi_kasie',
            'detail_kasie',
            'konfirmasi_kabid',
            'detail_kabid',
            'konfirmasi_sekretaris',
            'detail_sekretaris',
            'konfirmasi_kadis',
            'detail_kadis',
            'proses_selesai',
            'kesimpulan',
            'file_pendukung',
            'alasan_kasie',
            'alasan_kabid',
            'alasan_sekretaris',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

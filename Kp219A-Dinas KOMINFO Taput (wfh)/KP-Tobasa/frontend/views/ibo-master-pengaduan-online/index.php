<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IboMasterPengaduanOnlineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Pengaduan Online';

?>

<div class="ibo-master-pengaduan-online-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Buat  Pengaduan Online', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_master_jenis_pengaduan',
            'nama',
            'no_hp',
            'email:email',
            //'alamat',
            //'deskripsi_pengaduan',
            //'konfirmasi_kasie',
            //'detail_kasie',
            //'konfirmasi_kabid',
            //'detail_kabid',
            //'konfirmasi_sekretaris',
            //'detail_sekretaris',
            //'konfirmasi_kadis',
            //'detail_kadis',
            //'proses_selesai',
            //'kesimpulan',
            //'file_pendukung',
            //'alasan_kasie',
            //'alasan_kabid',
            //'alasan_sekretaris',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

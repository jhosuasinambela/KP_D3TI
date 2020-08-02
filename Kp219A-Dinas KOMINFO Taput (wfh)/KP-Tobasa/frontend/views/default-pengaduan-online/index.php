<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DefaultPengaduanOnlineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Default Pengaduan Onlines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="default-pengaduan-online-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Default Pengaduan Online', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_default_pengaduan',
            'id_master_pengaduan',
            'nama',
            'alamat',
            'provinsi',
            //'provinsi_text',
            //'id_kab',
            //'kabupaten_text',
            //'id_kec',
            //'kecamatan_text',
            //'id_kel',
            //'kelurahan_text',
            //'deskripsi_pengaduan',
            //'urut',
            //'tanggal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

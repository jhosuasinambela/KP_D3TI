<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IboMasterIzinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ibo Master Izins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ibo-master-izin-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ibo Master Izin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_master_izin',
            'id_kategori_izin',
            'id_master_kategori-izin',
            'nama',
            'deskripsi:ntext',
            //'kode_izin',
            //'nama_singkat',
            //'icon',
            //'id_master_kategori_izin',
            //'id_masa_berlaku',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'active',
            //'retribusi_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

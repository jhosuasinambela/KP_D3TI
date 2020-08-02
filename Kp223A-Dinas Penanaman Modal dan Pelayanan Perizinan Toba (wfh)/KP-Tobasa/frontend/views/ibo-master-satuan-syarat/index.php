<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\helpers\Url;
use common\components\ToolsColumn;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IboMasterSatuanSyaratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Syarat Usaha';


?>

<head>

  <style type="text/css">
    body {
  background: url('https://i.ytimg.com/vi/NiZh-3aEmSo/maxresdefault.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;
  

  </style>
</head>

<div class="ibo-master-satuan-syarat-index">
<h1><?= Html::encode($this->title) ?></h1>
    

    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'deskripsi:ntext',
            'waktu_penyelesaian',
            'retribusi',
            //'upload_file',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            //'active',

            ['attribute'=>'Download',
        'format'=>'raw',
        'value' => function($data)
        {
        return
        Html::a('Lihat Syarat', ['download', 'id' => $data->id],['class' => 'btn btn-primary']);

        }
        ],
        ],
    ]); ?>


</div>

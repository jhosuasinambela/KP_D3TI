<?php


use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use common\components\ToolsColumn;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\IboLandasanHukumSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Izin';

?>

<div class="ibo-landasan-hukum-index">
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



    <h1><?= Html::encode($this->title) ?></h1>
<!--  -->

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id_ibo_landasan_hukum',
            'nama_landasan_hukum',
            'nama_singkatan',
            'published',
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
        Html::a('Download file', ['download', 'id' => $data->id_ibo_landasan_hukum],['class' => 'btn btn-primary']);

        }
        ],
            ]
            
        
    ]); ?>


</div>

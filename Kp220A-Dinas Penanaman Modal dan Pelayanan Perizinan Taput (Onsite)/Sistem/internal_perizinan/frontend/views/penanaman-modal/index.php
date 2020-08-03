<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\components\ToolsColumn;
use common\helpers\LinkHelper;
use yii\helpers\Url;



?>
<div class="perizinan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kelola Bidang Pengendalian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nama',
            'lokasi',
            'tahun',
            'file',
  

    ['class' => 'common\components\ToolsColumn',
    'template' => '{view}',
    'header' => 'Aksi',
    'buttons' => [
        'view' => function ($url, $model){
            return ToolsColumn::renderCustomButton($url, $model, 'View Detail', 'fa fa-eye');
        },
        // 'edit' => function ($url, $model){
        //   if ($model->nama) {
        //     return ToolsColumn::renderCustomButton($url, $model, 'Edit', 'fa fa-times');
        //   }else{
        //     return ToolsColumn::renderCustomButton($url, $model, 'Edit', 'fa fa-times');
        //   
    // }
    //     },
      ],

        'urlCreator' => function ($action, $model, $key, $index){
            if ($action === 'view') {
              return Url::toRoute(['view', 'id' => $key]);
          }else if ($action === 'edit') {
              return Url::toRoute(['update', 'id' => $key]);
            }

          }
        ],
        ],
        
        ]); ?>
        
        </div>

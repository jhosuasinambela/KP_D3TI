<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\components\ToolsColumn;
use common\helpers\LinkHelper;
use yii\helpers\Url;


?>
<div class="sekretariat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kelola Bidang Sekretariat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'no_surat',
            'jenis_surat',
            'pengirim',
            'tanggal',
            'perihal',
            'file',
  

    ['class' => 'common\components\ToolsColumn',
    'template' => '{view}',
    'header' => 'Aksi',
    'buttons' => [
        'view' => function ($url, $model){
            return ToolsColumn::renderCustomButton($url, $model, 'View Detail', 'fa fa-eye');
        },
        // 'edit' => function ($url, $model){
        //   if ($model->no_surat) {
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

<?php Pjax::end(); ?>
        
        </div>

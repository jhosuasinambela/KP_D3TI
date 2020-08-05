<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Bidang Pengendalian';
?>
<div class="bidang-pengendalian-view">
  <h1><?= Html::encode($this->title) ?></h1>
  <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'nama',
            'lokasi',
            'tahun',
            
        
         ['attribute' => 'file',
            'label' => 'File Pengendalian',
            'format' => 'html',
            'value' => 
            function($model){
                return Html::a($model->file, ['bidang-pengendalian/download', 'id'=> $model->id_pengendalian]);
            }
        ],
     
    ],
  ]) ?>
  <?= Html::a('Lihat Pdf', [
    'pdf',
    'id' => $model->id_pengendalian,
    ], [
    'class' => 'btn btn-primary',
    'target' => '_blank',
  ]); ?>

</div>

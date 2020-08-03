<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Bidang Perizinan';
?>
<div class="perizinan-view">
  <h1><?= Html::encode($this->title) ?></h1>
  <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
         'nama',
            'lokasi',
            'tahun',
            'file',
        
         ['attribute' => 'file',
            'label' => 'File Perizinan',
            'format' => 'html',
            'value' => 
            function($model){
                return Html::a($model->file, ['pengendalian/download', 'id'=> $model->id_pengendalian]);
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

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
        'no_izin',
        'jenis_izin',
        'nama_pemilik',
        'lokasi',
        
         ['attribute' => 'file',
            'label' => 'File Perizinan',
            'format' => 'html',
            'value' => 
            function($model){
                return Html::a($model->file, ['perizinan/download', 'id'=> $model->id_perizinan]);
            }
        ],
     
    ],
  ]) ?>
  <?= Html::a('Lihat Pdf', [
    'pdf',
    'id' => $model->id_perizinan,
    ], [
    'class' => 'btn btn-primary',
    'target' => '_blank',
  ]); ?>

</div>

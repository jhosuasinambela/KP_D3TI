<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


$this->title = 'Bidang Sekretariat';
?>
<div class="sekretariat-view">
  <h1><?= Html::encode($this->title) ?></h1>
  <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'no_surat',
        'jenis_surat',
            'pengirim',
            'tanggal',
            'perihal',
        
         ['attribute' => 'file',
            'label' => 'File Sekretariat',
            'format' => 'html',
            'value' => 
            function($model){
                return Html::a($model->file, ['sekretariat/download', 'id'=> $model->id_sekretariat]);
            }
        ],
     
    ],
  ]) ?>
  <?= Html::a('Lihat Pdf', [
    'pdf',
    'id' => $model->id_sekretariat,
    ], [
    'class' => 'btn btn-primary',
    'target' => '_blank',
  ]); ?>

</div>

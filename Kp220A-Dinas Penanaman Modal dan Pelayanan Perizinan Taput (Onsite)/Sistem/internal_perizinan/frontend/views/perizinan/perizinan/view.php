<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Perizinan */

$this->title = 'Data Perizinan';
$this->params['breadcrumbs'][] = ['label' => ' Perizinan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="perizinan-view">

	<h1><?= Html::encode($this->title) ?></h1>


	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			'no_izin',
			'nama_pemilik',
			'lokasi',
			['attribute' => 'file[]',
			'label' => 'File Pemilik',
			'options' => ['multiple' => true],
			'format' => 'html',
			'value' => 
			function($model){
				return Html::a($model->file, ['perizinan/download', 'id'=> $model->id_perizinan]);
			}
		],
		
	],
]) ?>


</div>

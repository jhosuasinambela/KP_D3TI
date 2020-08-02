<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\IboMasterPengaduanOnlineSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ibo-master-pengaduan-online-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= //$form->field($model, 'id') ?>

    <?= //$form->field($model, 'id_master_jenis_pengaduan') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'no_hp') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'deskripsi_pengaduan') ?>

    <?php // echo $form->field($model, 'konfirmasi_kasie') ?>

    <?php // echo $form->field($model, 'detail_kasie') ?>

    <?php // echo $form->field($model, 'konfirmasi_kabid') ?>

    <?php // echo $form->field($model, 'detail_kabid') ?>

    <?php // echo $form->field($model, 'konfirmasi_sekretaris') ?>

    <?php // echo $form->field($model, 'detail_sekretaris') ?>

    <?php // echo $form->field($model, 'konfirmasi_kadis') ?>

    <?php // echo $form->field($model, 'detail_kadis') ?>

    <?php // echo $form->field($model, 'proses_selesai') ?>

    <?php // echo $form->field($model, 'kesimpulan') ?>

    <?php // echo $form->field($model, 'file_pendukung') ?>

    <?php // echo $form->field($model, 'alasan_kasie') ?>

    <?php // echo $form->field($model, 'alasan_kabid') ?>

    <?php // echo $form->field($model, 'alasan_sekretaris') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

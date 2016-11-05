<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaklumatPelajarPenjaga */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maklumat Pelajar Penjagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maklumat-pelajar-penjaga-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_pelajar',
            'jantina',
            'tarikh_lahir',
            'tempat_lahir:ntext',
            'no_surat_beranak',
            'no_mykid',
            'pusat_pengajian_id',
            'sesi_pengajian',
            'tarikh_masuk',
            'tahun_mula',
            'alamat_rumah:ntext',
            'SPRA',
            'PSRA',
            'status',
            'warganegara',
            'tahun_lewat',
            'alumni',
            'nama_bapa',
            'no_kad_pengenalan_bapa',
            'pekerjaan_bapa_penjaga',
            'no_tel_bapa',
            'no_hp_bapa',
            'alamat_majikan_bapa_penjaga:ntext',
            'gaji_bapa',
            'nama_ibu',
            'no_kad_pengenalan_ibu',
            'pekerjaan_ibu',
            'no_tel_ibu',
            'no_hp_ibu',
            'alamat_majikan_ibu:ntext',
            'gaji_ibu',
            'date_create',
            'date_update',
            'enter_by',
            'update_by',
        ],
    ]) ?>

</div>

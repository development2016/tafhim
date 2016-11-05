<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MaklumatPelajarPenjagaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maklumat Pelajar Penjagas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maklumat-pelajar-penjaga-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Maklumat Pelajar Penjaga', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nama_pelajar',
            'jantina',
            'tarikh_lahir',
            'tempat_lahir:ntext',
            // 'no_surat_beranak',
            // 'no_mykid',
            // 'pusat_pengajian_id',
            // 'sesi_pengajian',
            // 'tarikh_masuk',
            // 'tahun_mula',
            // 'alamat_rumah:ntext',
            // 'SPRA',
            // 'PSRA',
            // 'status',
            // 'warganegara',
            // 'tahun_lewat',
            // 'alumni',
            // 'nama_bapa',
            // 'no_kad_pengenalan_bapa',
            // 'pekerjaan_bapa_penjaga',
            // 'no_tel_bapa',
            // 'no_hp_bapa',
            // 'alamat_majikan_bapa_penjaga:ntext',
            // 'gaji_bapa',
            // 'nama_ibu',
            // 'no_kad_pengenalan_ibu',
            // 'pekerjaan_ibu',
            // 'no_tel_ibu',
            // 'no_hp_ibu',
            // 'alamat_majikan_ibu:ntext',
            // 'gaji_ibu',
            // 'date_create',
            // 'date_update',
            // 'enter_by',
            // 'update_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>

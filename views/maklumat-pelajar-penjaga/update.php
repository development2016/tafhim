<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MaklumatPelajarPenjaga */

$this->title = 'Update Maklumat Pelajar Penjaga: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maklumat Pelajar Penjagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maklumat-pelajar-penjaga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

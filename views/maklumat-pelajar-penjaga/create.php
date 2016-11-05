<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MaklumatPelajarPenjaga */

$this->title = 'Create Maklumat Pelajar Penjaga';
$this->params['breadcrumbs'][] = ['label' => 'Maklumat Pelajar Penjagas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maklumat-pelajar-penjaga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

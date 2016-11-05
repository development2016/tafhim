<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lookup Pendapatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lookup-pendapatan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lookup Pendapatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pendapatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use app\models\Collares;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Collares';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collares-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Collares', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcollar',
            'nombre',
            'efectoesp',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Collares $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idcollar' => $model->idcollar]);
                 }
            ],
        ],
    ]); ?>


</div>

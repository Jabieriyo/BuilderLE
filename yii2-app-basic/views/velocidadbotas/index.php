<?php

use app\models\Velocidadbotas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Velocidadbotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="velocidadbotas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Velocidadbotas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbotas',
            'velmovimiento',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Velocidadbotas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idbotas' => $model->idbotas, 'velmovimiento' => $model->velmovimiento]);
                 }
            ],
        ],
    ]); ?>


</div>

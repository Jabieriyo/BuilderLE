<?php

use app\models\Botas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Botas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="botas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Botas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbotas',
            'nombre',
            'porcentevasion',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Botas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idbotas' => $model->idbotas]);
                 }
            ],
        ],
    ]); ?>


</div>

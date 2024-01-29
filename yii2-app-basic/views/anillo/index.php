<?php

use app\models\Anillos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Anillos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anillos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Anillos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idanillo',
            'nombre',
            'probcrit',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Anillos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idanillo' => $model->idanillo]);
                 }
            ],
        ],
    ]); ?>


</div>

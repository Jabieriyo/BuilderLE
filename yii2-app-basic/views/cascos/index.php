<?php

use app\models\Cascos;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Cascos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cascos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cascos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcasco',
            'nombre',
            'vidaextra',
            'regen',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Cascos $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idcasco' => $model->idcasco]);
                 }
            ],
        ],
    ]); ?>


</div>

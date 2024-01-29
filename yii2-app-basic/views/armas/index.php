<?php

use app\models\Armas;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Armas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Armas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idarma',
            'nombre',
            'valoratk',
            'porcentfisicoatk',
            'porcentelementalatk',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Armas $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idarma' => $model->idarma]);
                 }
            ],
        ],
    ]); ?>


</div>

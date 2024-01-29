<?php

use app\models\Armaduras;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Armaduras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armaduras-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Armaduras', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idarmadura',
            'nombre',
            'valordef',
            'porcentfisicodef',
            'porcentelementaldef',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Armaduras $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idarmadura' => $model->idarmadura]);
                 }
            ],
        ],
    ]); ?>


</div>

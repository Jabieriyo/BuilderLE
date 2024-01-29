<?php

use app\models\Builds;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Builds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="builds-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Builds', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nombre',
            'descripcion',
            'fcreacion',
            'efectividad',
            'complejidad',
            //'idpersonaje',
            //'idcascos',
            //'idcollar',
            //'idarma',
            //'idarmadura',
            //'idbotas',
            //'idanillo',
            //'idvelbotas',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Builds $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'nombre' => $model->nombre]);
                 }
            ],
        ],
    ]); ?>


</div>

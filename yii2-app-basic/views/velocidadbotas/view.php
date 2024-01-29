<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Velocidadbotas $model */

$this->title = $model->idbotas;
$this->params['breadcrumbs'][] = ['label' => 'Velocidadbotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="velocidadbotas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idbotas' => $model->idbotas, 'velmovimiento' => $model->velmovimiento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idbotas' => $model->idbotas, 'velmovimiento' => $model->velmovimiento], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idbotas',
            'velmovimiento',
        ],
    ]) ?>

</div>

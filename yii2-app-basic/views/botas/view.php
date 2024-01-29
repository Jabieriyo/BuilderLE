<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Botas $model */

$this->title = $model->idbotas;
$this->params['breadcrumbs'][] = ['label' => 'Botas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="botas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idbotas' => $model->idbotas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idbotas' => $model->idbotas], [
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
            'nombre',
            'porcentevasion',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Anillos $model */

$this->title = $model->idanillo;
$this->params['breadcrumbs'][] = ['label' => 'Anillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="anillos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idanillo' => $model->idanillo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idanillo' => $model->idanillo], [
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
            'idanillo',
            'nombre',
            'probcrit',
        ],
    ]) ?>

</div>

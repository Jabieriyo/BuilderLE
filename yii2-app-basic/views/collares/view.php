<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Collares $model */

$this->title = $model->idcollar;
$this->params['breadcrumbs'][] = ['label' => 'Collares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="collares-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idcollar' => $model->idcollar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idcollar' => $model->idcollar], [
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
            'idcollar',
            'nombre',
            'efectoesp',
        ],
    ]) ?>

</div>

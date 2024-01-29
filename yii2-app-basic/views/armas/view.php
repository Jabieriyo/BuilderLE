<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Armas $model */

$this->title = $model->idarma;
$this->params['breadcrumbs'][] = ['label' => 'Armas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="armas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idarma' => $model->idarma], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idarma' => $model->idarma], [
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
            'idarma',
            'nombre',
            'valoratk',
            'porcentfisicoatk',
            'porcentelementalatk',
        ],
    ]) ?>

</div>

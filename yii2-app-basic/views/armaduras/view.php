<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Armaduras $model */

$this->title = $model->idarmadura;
$this->params['breadcrumbs'][] = ['label' => 'Armaduras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="armaduras-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idarmadura' => $model->idarmadura], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idarmadura' => $model->idarmadura], [
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
            'idarmadura',
            'nombre',
            'valordef',
            'porcentfisicodef',
            'porcentelementaldef',
        ],
    ]) ?>

</div>

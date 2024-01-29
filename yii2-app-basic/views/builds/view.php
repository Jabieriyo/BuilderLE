<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Builds $model */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Builds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="builds-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'nombre' => $model->nombre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'nombre' => $model->nombre], [
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
            'nombre',
            'descripcion',
            'fcreacion',
            'efectividad',
            'complejidad',
            'idpersonaje',
            'idcascos',
            'idcollar',
            'idarma',
            'idarmadura',
            'idbotas',
            'idanillo',
            'idvelbotas',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Velocidadbotas $model */

$this->title = 'Update Velocidadbotas: ' . $model->idbotas;
$this->params['breadcrumbs'][] = ['label' => 'Velocidadbotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbotas, 'url' => ['view', 'idbotas' => $model->idbotas, 'velmovimiento' => $model->velmovimiento]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="velocidadbotas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

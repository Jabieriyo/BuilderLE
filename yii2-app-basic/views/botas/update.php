<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Botas $model */

$this->title = 'Update Botas: ' . $model->idbotas;
$this->params['breadcrumbs'][] = ['label' => 'Botas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbotas, 'url' => ['view', 'idbotas' => $model->idbotas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="botas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

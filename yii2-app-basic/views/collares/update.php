<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Collares $model */

$this->title = 'Update Collares: ' . $model->idcollar;
$this->params['breadcrumbs'][] = ['label' => 'Collares', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcollar, 'url' => ['view', 'idcollar' => $model->idcollar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="collares-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

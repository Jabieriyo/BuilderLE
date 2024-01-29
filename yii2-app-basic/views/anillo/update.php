<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Anillos $model */

$this->title = 'Update Anillos: ' . $model->idanillo;
$this->params['breadcrumbs'][] = ['label' => 'Anillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idanillo, 'url' => ['view', 'idanillo' => $model->idanillo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="anillos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

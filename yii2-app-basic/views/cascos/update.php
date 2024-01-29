<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cascos $model */

$this->title = 'Update Cascos: ' . $model->idcasco;
$this->params['breadcrumbs'][] = ['label' => 'Cascos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcasco, 'url' => ['view', 'idcasco' => $model->idcasco]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cascos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

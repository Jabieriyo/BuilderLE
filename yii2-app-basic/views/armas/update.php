<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Armas $model */

$this->title = 'Update Armas: ' . $model->idarma;
$this->params['breadcrumbs'][] = ['label' => 'Armas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idarma, 'url' => ['view', 'idarma' => $model->idarma]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="armas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

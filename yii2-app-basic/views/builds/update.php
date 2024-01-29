<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Builds $model */

$this->title = 'Update Builds: ' . $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Builds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre, 'url' => ['view', 'nombre' => $model->nombre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="builds-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

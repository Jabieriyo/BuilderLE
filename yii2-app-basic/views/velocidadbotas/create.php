<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Velocidadbotas $model */

$this->title = 'Create Velocidadbotas';
$this->params['breadcrumbs'][] = ['label' => 'Velocidadbotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="velocidadbotas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Armas $model */

$this->title = 'Create Armas';
$this->params['breadcrumbs'][] = ['label' => 'Armas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Botas $model */

$this->title = 'Create Botas';
$this->params['breadcrumbs'][] = ['label' => 'Botas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="botas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

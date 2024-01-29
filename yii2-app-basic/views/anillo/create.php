<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Anillos $model */

$this->title = 'Create Anillos';
$this->params['breadcrumbs'][] = ['label' => 'Anillos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anillos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

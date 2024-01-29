<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Builds $model */

$this->title = 'Create Builds';
$this->params['breadcrumbs'][] = ['label' => 'Builds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="builds-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

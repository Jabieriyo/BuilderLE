<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Collares $model */

$this->title = 'Create Collares';
$this->params['breadcrumbs'][] = ['label' => 'Collares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collares-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cascos $model */

$this->title = 'Create Cascos';
$this->params['breadcrumbs'][] = ['label' => 'Cascos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cascos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

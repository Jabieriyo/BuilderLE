<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Armaduras $model */

$this->title = 'Create Armaduras';
$this->params['breadcrumbs'][] = ['label' => 'Armaduras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="armaduras-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

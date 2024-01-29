<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Armaduras $model */

$this->title = 'Update Armaduras: ' . $model->idarmadura;
$this->params['breadcrumbs'][] = ['label' => 'Armaduras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idarmadura, 'url' => ['view', 'idarmadura' => $model->idarmadura]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="armaduras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

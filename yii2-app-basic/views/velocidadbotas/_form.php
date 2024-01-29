<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Velocidadbotas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="velocidadbotas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'velmovimiento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

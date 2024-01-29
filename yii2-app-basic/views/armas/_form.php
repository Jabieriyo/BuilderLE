<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Armas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="armas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valoratk')->textInput() ?>

    <?= $form->field($model, 'porcentfisicoatk')->textInput() ?>

    <?= $form->field($model, 'porcentelementalatk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

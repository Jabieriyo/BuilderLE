<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Builds $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="builds-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fcreacion')->textInput() ?>

    <?= $form->field($model, 'efectividad')->textInput() ?>

    <?= $form->field($model, 'complejidad')->textInput() ?>

    <?= $form->field($model, 'idpersonaje')->textInput() ?>

    <?= $form->field($model, 'idcascos')->textInput() ?>

    <?= $form->field($model, 'idcollar')->textInput() ?>

    <?= $form->field($model, 'idarma')->textInput() ?>

    <?= $form->field($model, 'idarmadura')->textInput() ?>

    <?= $form->field($model, 'idbotas')->textInput() ?>

    <?= $form->field($model, 'idanillo')->textInput() ?>

    <?= $form->field($model, 'idvelbotas')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

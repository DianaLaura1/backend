<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IndicadoresSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicadores-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idindicadores') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'objetivo') ?>

    <?= $form->field($model, 'nivelObjetivo') ?>

    <?= $form->field($model, 'unidadMedida') ?>

    <?php // echo $form->field($model, 'meta') ?>

    <?php // echo $form->field($model, 'variableB') ?>

    <?php // echo $form->field($model, 'medioVerificacionB') ?>

    <?php // echo $form->field($model, 'variableC') ?>

    <?php // echo $form->field($model, 'medioVerificacionC') ?>

    <?php // echo $form->field($model, 'periodicidad_idperiodicidad') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

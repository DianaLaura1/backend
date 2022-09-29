<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Indicadores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="indicadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <table>
    <tr>
    <td> <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td><?= $form->field($model, 'objetivo')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td> <?= $form->field($model, 'nivelObjetivo')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td> <?= $form->field($model, 'unidadMedida')->textInput(['maxlength' => true]) ?></td>
    </table>

    <table>
    <tr>
    <td> <?= $form->field($model, 'meta')->textInput() ?></td>
    </table>
    <table>
<tr>
  <td><strong><?= $form->field($model, 'variableB')->textInput(['maxlength' => true]) ?></strong></td>

  <td><strong><?= $form->field($model, 'medioVerificacionB')->textInput(['maxlength' => true]) ?></strong></td>
  </tr>
  </table>
  <table >
<tr>
  <td><strong><?= $form->field($model, 'variableC')->textInput(['maxlength' => true]) ?></strong></td>

  <td><strong><?= $form->field($model, 'medioVerificacionC')->textInput(['maxlength' => true]) ?></strong></td>
  </tr>
  </table>
  <table>
    <tr>
    <td> <?= $form->field($model, 'periodicidad_idperiodicidad')->textInput() ?></td>
    </table>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;


/* @var $this yii\web\View */
/* @var $model app\models\Valores */
/* @var $form yii\widgets\ActiveForm */
//<td><strong><input readonly="readonly" value="B" type="text" id="valores-tipo" class="form-control" name="Valores[tipo]" aria-required="true" aria-invalid="true"></strong></td>

?>

<div class="valores-form" style=" max-width:100%; margin:40px auto;text-align:center">

    <?php $form = ActiveForm::begin(); ?>
    
    <html>
<body>
<p>TABLA VARIABLE B</p>
</body>
</html>
    <table>
        <tr>
            <td>Ingenieria</td>
            <td>Tipo</td>
            <td>Hombres</td>
            <td>Mujeres</td>
            <td>Pertenecen Etnia</td>
            <td>Habitan en el Estado</td>
            <td>Dis.Motriz</td>
            <td>Dis.Mental</td>
            <td>Dis.Sensorial</td>
            <td>Dis.Psicosocial</td>
            <td>Disc. Comunicacion</td>
            <td>Indicador</td>
        </tr>
        <?php foreach ($prts as $index => $valores) { ?>
                   
        <tr>
            
            <td><?= $form->field($valores, "[$index]ingenieria")->textInput()->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]tipo")->textInput()->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]hombres")->textInput(['maxlength' => true])->label(FALSE) ?></td> 
            <td><?= $form->field($valores, "[$index]mujeres")->textInput(['maxlength' => true])->label(FALSE) ?></td>       
            <td><?= $form->field($valores, "[$index]pertenecenEtnia")->textInput(['maxlength' => true])->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]HabitanEnElEstado")->textInput()->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]DiscapacidadMotriz")->textInput(['maxlength' => true])->label(FALSE) ?></td>  
            <td><?= $form->field($valores, "[$index]DiscapacidadMental")->textInput(['maxlength' => true])->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]DiscapacidadSensorial")->textInput()->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]DiscapacidadPsicosocial")->textInput(['maxlength' => true])->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]DiscapacidadComunicacion")->textInput(['maxlength' => true])->label(FALSE) ?></td>
            <td><?= $form->field($valores, "[$index]indicadores_idindicadores")->textInput()->label(FALSE) ?></td>   
            
        </tr> 
       <?php } ?>
    </table>
   

<div class="form-group">
        <?= Html::submitButton($valores->isNewRecord ? 'create' : 'Update', ['class' => $valores->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>

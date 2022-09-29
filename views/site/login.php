<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


?>
<div  style="text-align:center;width: 50%; margin:0 auto;">
<img src="https://sgi.valladolid.tecnm.mx/Imagenes/Escudo_ITSVA_registrado_copia.png"alt="W3Schools.com" style="width:142px;height:142px;">
    <h1><?= Html::encode($this->title) ?></h1>
    

    <div class="row" style="text-align:center; width: 50%; margin:0 auto;">
        <div class="col-lg-5" style="text-align:center; width: 100%; margin:0 auto;" >
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <body>
</body>
</div>

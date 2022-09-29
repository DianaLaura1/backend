<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Valores */

$this->title = 'Update Valores: ' . $model->idvalores;
$this->params['breadcrumbs'][] = ['label' => 'Valores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idvalores, 'url' => ['view', 'id' => $model->idvalores]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="valores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

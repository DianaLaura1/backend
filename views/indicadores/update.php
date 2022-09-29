<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Indicadores */

$this->title = 'Update Indicadores: ' . $model->idindicadores;
$this->params['breadcrumbs'][] = ['label' => 'Indicadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idindicadores, 'url' => ['view', 'id' => $model->idindicadores]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="indicadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

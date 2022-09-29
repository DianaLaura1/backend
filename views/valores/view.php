<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Valores */

$this->title = $model->idvalores;
$this->params['breadcrumbs'][] = ['label' => 'Valores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idvalores], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idvalores], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'idvalores',
            //'tipo',
            'hombres',
            'mujeres',
            'pertenecenEtnia',
            'HabitanEnElEstado',
            'ingenieria',
            'DiscapacidadMotriz',
            'DiscapacidadMental',
            'DiscapacidadSensorial',
            'DiscapacidadPsicosocial',
            'DiscapacidadComunicacion',
            //'indicadores_idindicadores',
        ],
    ]) ?>

</div>

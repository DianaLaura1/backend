<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ValoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Valores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Valores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idvalores',
            'tipo',
            'hombres',
            'mujeres',
            'pertenecenEtnia',
            // 'HabitanEnElEstado',
            // 'ingenieria',
            // 'DiscapacidadMotriz',
            // 'DiscapacidadMental',
            // 'DiscapacidadSensorial',
            // 'DiscapacidadPsicosocial',
            // 'DiscapacidadComunicacion',
            // 'indicadores_idindicadores',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

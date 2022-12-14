<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IndicadoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Indicadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indicadores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Indicadores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idindicadores',
            'nombre',
            'objetivo',
            'nivelObjetivo',
            'unidadMedida',
            // 'meta',
            // 'variableB',
            // 'medioVerificacionB',
            // 'variableC',
            // 'medioVerificacionC',
            // 'periodicidad_idperiodicidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

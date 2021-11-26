<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ControleGastosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Controle Gastos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controle-gastos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Controle Gastos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'mes',
            'entrada',
            'saida',
            'total',
            //'mete',
            //'ano',
            //'descricao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

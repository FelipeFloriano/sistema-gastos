<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ControleGastos */

$this->title = 'Update Controle Gastos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Controle Gastos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="controle-gastos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

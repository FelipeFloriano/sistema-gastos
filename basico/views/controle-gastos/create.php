<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ControleGastos */

$this->title = Yii::t('app', 'Create Controle Gastos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Controle Gastos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="controle-gastos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

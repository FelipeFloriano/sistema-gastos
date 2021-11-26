<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ControleGastosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="controle-gastos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'mes') ?>

    <?= $form->field($model, 'entrada') ?>

    <?= $form->field($model, 'saida') ?>

    <?= $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'mete') ?>

    <?php // echo $form->field($model, 'ano') ?>

    <?php // echo $form->field($model, 'descricao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

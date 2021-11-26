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
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'entrada') ?>

    <?= $form->field($model, 'saida') ?>

    <?= $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'mete') ?>

    <?php // echo $form->field($model, 'mes') ?>

    <?php // echo $form->field($model, 'ano') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

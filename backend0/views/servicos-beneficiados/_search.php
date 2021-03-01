<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServicosBeneficiadosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicos-beneficiados-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'servico_id') ?>

    <?= $form->field($model, 'beneficiario_id') ?>

    <?= $form->field($model, 'us_id') ?>

    <?= $form->field($model, 'activista_id') ?>

    <?php // echo $form->field($model, 'data_beneficio') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'criado_por') ?>

    <?php // echo $form->field($model, 'actualizado_por') ?>

    <?php // echo $form->field($model, 'criado_em') ?>

    <?php // echo $form->field($model, 'actualizado_em') ?>

    <?php // echo $form->field($model, 'user_location') ?>

    <?php // echo $form->field($model, 'user_location2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProvidersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="providers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prov') ?>

    <?= $form->field($model, 'email_prov') ?>

    <?= $form->field($model, 'name_prov') ?>

    <?= $form->field($model, 'phone_prov') ?>

    <?= $form->field($model, 'address_prov') ?>

    <?php // echo $form->field($model, 'id_con') ?>

    <?php // echo $form->field($model, 'score_prov') ?>

    <?php // echo $form->field($model, 'datetime_added_prov') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

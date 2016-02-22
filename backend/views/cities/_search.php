<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CitiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cities-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'country_code') ?>

    <?= $form->field($model, 'city_code') ?>

    <?= $form->field($model, 'city_name') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('core', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('core', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

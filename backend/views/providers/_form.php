<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Providers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="providers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email_prov')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'basic'
            ]) ?>

    <?= $form->field($model, 'name_prov')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'basic'
            ]) ?>

    <?= $form->field($model, 'phone_prov')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'basic'
            ]) ?>

    <?= $form->field($model, 'address_prov')->widget(CKEditor::className(), [
                'options' => ['rows' => 6],
                'preset' => 'basic'
            ]) ?>

    <?= $form->field($model, 'id_con')->textInput() ?>

    <?= $form->field($model, 'score_prov')->textInput() ?>

    <?= $form->field($model, 'datetime_added_prov')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dektrium\user\widgets\Connect;

/**
 * @var yii\web\View                   $this
 * @var dektrium\user\models\LoginForm $model
 * @var dektrium\user\Module           $module
 */

$this->title = Yii::t('user', 'Sign in');
$this->params['breadcrumbs'][] = $this->title;


$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        
         <?php $form = ActiveForm::begin([
            'id'                     => 'login-form',
            'enableAjaxValidation'   => true,
            'enableClientValidation' => false,
            'validateOnBlur'         => false,
            'validateOnType'         => false,
            'validateOnChange'       => false,
        ]) ?>

        <?= $form->field($model, 'login', $fieldOptions1)->label(false)->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form->field($model, 'password', $fieldOptions2)->label(false)->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>
        
        <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '4']) ?>
        
        <?= Html::a(Yii::t('user', 'Forgot password?'), ['/user/recovery/request'], ['tabindex' => '5']) ?>

        <?= Connect::widget([
            'baseAuthUrl' => ['/user/security/auth']
        ]) ?>
    

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton(Yii::t('user', 'Sign in'), ['class' => 'btn btn-primary btn-block btn-flat', 'tabindex' => '3']) ?>
            </div>
            <!-- /.col -->
        </div>

        <?php ActiveForm::end(); ?>
        
         <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in
                using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign
                in using Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <div class="row">
            <div class="col-xs-12">
                <?php if ($module->enableConfirmation): ?>
                        <?= Html::a(Yii::t('user', 'Didn\'t receive confirmation message?'), ['/user/registration/resend']) ?>
                <?php endif ?>
            </div>

            <div class="col-xs-12">
                <?php if ($module->enableRegistration): ?>
                    <?= Html::a(Yii::t('user', 'Don\'t have an account? Sign up!'), ['/user/registration/register']) ?>
                <?php endif ?>
            </div>

        </div>

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
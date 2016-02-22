<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Country */

$this->title = Yii::t('core', 'Update {modelClass}: ', [
    'modelClass' => 'Country',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('core', 'Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = Yii::t('core', 'Update');
?>
<div class="country-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cities */

$this->title = Yii::t('core', 'Update {modelClass}: ', [
    'modelClass' => 'Cities',
]) . ' ' . $model->city_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('core', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->city_code, 'url' => ['view', 'id' => $model->city_code]];
$this->params['breadcrumbs'][] = Yii::t('core', 'Update');
?>
<div class="cities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

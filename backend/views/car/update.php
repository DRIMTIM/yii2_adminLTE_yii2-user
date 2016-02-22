<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Car */

$this->title = 'Update Car: ' . ' ' . $model->matricula;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->matricula, 'url' => ['view', 'id' => $model->matricula]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

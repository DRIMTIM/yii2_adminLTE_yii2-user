<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Providers */

$this->title = 'Update Providers: ' . ' ' . $model->id_prov;
$this->params['breadcrumbs'][] = ['label' => 'Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prov, 'url' => ['view', 'id' => $model->id_prov]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="providers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

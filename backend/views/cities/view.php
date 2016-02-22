<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cities */

$this->title = $model->city_code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('core', 'Cities'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cities-view box box-solid box-default">
    
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'country_code',
            'city_code',
            'city_name',
        ],
    ]) ?>

     <p>
        <?= Html::a(Yii::t('core', 'Update'), ['update', 'id' => $model->city_code], ['class' => 'btn btn-primary btn-lg margin']) ?>
        <?= Html::a(Yii::t('core', 'Delete'), ['delete', 'id' => $model->city_code], [
            'class' => 'btn btn-danger btn-lg margin',
            'data' => [
                'confirm' => Yii::t('core', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>


</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Country */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('core', 'Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-view box box-solid box-default">
    
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            'name',
            'population',
            'created_at',
            'updated_at',
        ],
    ]) ?>

     <p>
        <?= Html::a(Yii::t('core', 'Update'), ['update', 'id' => $model->code], ['class' => 'btn btn-primary btn-lg margin']) ?>
        <?= Html::a(Yii::t('core', 'Delete'), ['delete', 'id' => $model->code], [
            'class' => 'btn btn-danger btn-lg margin',
            'data' => [
                'confirm' => Yii::t('core', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php 
        foreach ($model->getCities()->all() as $key => $city) {
    ?>
        <div class="box-header with-border">
            <h3 class="box-title"><?= Html::encode($city->city_name) ?></h3>
        </div>

         <?= DetailView::widget([
            'model' => $city,
            'attributes' => [
                'city_code',
                'city_name'
            ],
        ]) ?>        

    <?php } ?>
    


</div>

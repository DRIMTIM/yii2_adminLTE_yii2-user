<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedidos */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedidos-view box box-solid box-default">
    
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'quantity',
            'price',
        ],
    ]) ?>

     <p>
        <?= Html::a('Update', ['update', 'id' => $model->name], ['class' => 'btn btn-primary btn-lg margin']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->name], [
            'class' => 'btn btn-danger btn-lg margin',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


</div>

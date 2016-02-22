<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Car */

$this->title = $model->matricula;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-view box box-solid box-default">
    
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'matricula',
            'marca',
            'modelo:ntext',
        ],
    ]) ?>

     <p>
        <?= Html::a('Update', ['update', 'id' => $model->matricula], ['class' => 'btn btn-primary btn-lg margin']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->matricula], [
            'class' => 'btn btn-danger btn-lg margin',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


</div>

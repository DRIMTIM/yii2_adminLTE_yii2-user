<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Providers */

$this->title = $model->id_prov;
$this->params['breadcrumbs'][] = ['label' => 'Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="providers-view box box-solid box-default">
    
    <div class="box-header with-border">
        <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prov',
            'email_prov:ntext',
            'name_prov:ntext',
            'phone_prov:ntext',
            'address_prov:ntext',
            'id_con',
            'score_prov',
            'datetime_added_prov',
        ],
    ]) ?>

     <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_prov], ['class' => 'btn btn-primary btn-lg margin']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_prov], [
            'class' => 'btn btn-danger btn-lg margin',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


</div>

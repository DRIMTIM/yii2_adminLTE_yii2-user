<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProvidersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="providers-index">

    <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text"><?= Html::encode($this->title) ?></span>
                  <span class="info-box-number"><?= $dataProvider->getTotalCount() ?></span>
                </div><!-- /.info-box-content -->
    </div>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Providers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prov',
            'email_prov:ntext',
            'name_prov:ntext',
            'phone_prov:ntext',
            'address_prov:ntext',
            // 'id_con',
            // 'score_prov',
            // 'datetime_added_prov',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

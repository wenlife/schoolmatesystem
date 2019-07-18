<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '校友信息管理';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mate-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('新增校友', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'gender',
           // 'birthday',
            'graduation',
            'teacher',
            'unit',
            'job',
            //'address',
            'phone',
            //'email:email',
            //'commend:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

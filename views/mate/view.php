<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mate */

$this->title = "详细信息";
\yii\web\YiiAsset::register($this);
?>
<div class="mate-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr/>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
            'name',
            'gender',
            'birthday',
            'graduation',
            'teacher',
            'unit',
            'job',
            'address',
            'phone',
            'email:email',
            'regtime',
            'commend:ntext',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mate */

$this->title = '修改' . $model->name."的基本信息";
$this->params['breadcrumbs'][] = ['label' => 'Mates', 'url' => ['index']];
?>
<div class="mate-update">

    <h1><?= Html::encode($this->title) ?></h1>
   <hr />
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

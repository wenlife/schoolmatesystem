<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mate */

$this->title = '请填写个人信息';

?>
<div class="mate-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <hr/>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


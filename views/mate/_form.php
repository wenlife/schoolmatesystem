<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Mate */
/* @var $form yii\widgets\ActiveForm */
$year = range(1981,date('Y'));
foreach ($year as $key => $value) {
    $arrYear[$value] = $value."年";
}
?>

<div class="mate-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'style'=>"width:300px"]) ?>

    <?= $form->field($model, 'gender')->dropDownList(['男'=>'男','女'=>'女'],['style'=>"width:80px"]) ?>

    <?= $form->field($model, 'birthday')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => '请选择日期','style'=>"width:300px"],
        'pluginOptions' => [
           // 'language'=>'zh',
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
            'minView'=>'month',
            'autoclose'=>true,
            
        ]
    ]); ?>
    <?= $form->field($model, 'graduation')->dropDownList($arrYear,['style'=>"width:100px"])?>

    <?= $form->field($model, 'teacher')->textInput(['maxlength' => true,'style'=>"width:300px"]) ?>

    <?= $form->field($model, 'unit')->textInput(['maxlength' => true,'style'=>"width:600px"]) ?>

    <?= $form->field($model, 'job')->textInput(['maxlength' => true,'style'=>"width:300px"]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true,'style'=>"width:600px"]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'style'=>"width:300px"]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'style'=>"width:300px"]) ?>

    <?= $form->field($model, 'commend')->textarea(['rows' => 6,'style'=>"width:600px"],['placeholder'=>"请输入推荐校友的姓名和电话"]) ?>

    <div class="form-group">
        <?= Html::submitButton('提交信息', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Solution;

/* @var $this yii\web\View */
/* @var $model backend\models\Pricing */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pricing-form">
 <?php 
    $countries=Solution::find()->all();
    $listData=ArrayHelper::map($countries,'id','title');
?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->dropDownList(
        $listData,
        ['prompt'=>'Select...']
        );
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>
   
    <?= $form->field($model, 'price')->textInput() ?>

     <div class="form-group">
        <?= Html::submitButton('Submit <i class="fa fa-check"></i>', ['class' => 'btn btn-primary pull-right']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>

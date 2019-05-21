<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model backend\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class'=>'form-control']) ?>

    <?= $form->field($model, 'active')->dropDownList(['1' => 'Yes', '0' => 'No']) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true, 'class'=>'form-control']) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6, 'class'=>'form-control', 'id'=>'mytextarea']) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit <i class="fa fa-check"></i>', ['class' => 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

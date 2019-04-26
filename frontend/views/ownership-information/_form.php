<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OwnershipInformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ownership-information-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'owner_partner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'social_security_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_in_business')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telephone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '3ownership_percentage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dob')->textInput() ?>

    <?= $form->field($model, 'home_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_id')->textInput() ?>

    <?= $form->field($model, 'number_of_employees')->textInput() ?>

    <?= $form->field($model, 'merchant_bank')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_manager_fn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'physical_address')->textInput() ?>

    <?= $form->field($model, 'pcity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pstate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pzip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'account_manager_email_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'industry')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

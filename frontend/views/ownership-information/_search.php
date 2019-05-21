<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OwnershipInformationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ownership-information-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'owner_id') ?>

    <?= $form->field($model, 'owner_partner') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'social_security_number') ?>

    <?php // echo $form->field($model, 'title_in_business') ?>

    <?php // echo $form->field($model, 'telephone_number') ?>

    <?php // echo $form->field($model, '3ownership_percentage') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'home_address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'customer_id') ?>

    <?php // echo $form->field($model, 'number_of_employees') ?>

    <?php // echo $form->field($model, 'merchant_bank') ?>

    <?php // echo $form->field($model, 'account_manager_fn') ?>

    <?php // echo $form->field($model, 'physical_address') ?>

    <?php // echo $form->field($model, 'pcity') ?>

    <?php // echo $form->field($model, 'pstate') ?>

    <?php // echo $form->field($model, 'pzip') ?>

    <?php // echo $form->field($model, 'account_manager_email_address') ?>

    <?php // echo $form->field($model, 'industry') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

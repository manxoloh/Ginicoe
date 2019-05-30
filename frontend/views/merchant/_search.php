<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MerchantSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'date_of_birth') ?>

    <?php // echo $form->field($model, 'social_security_number') ?>

    <?php // echo $form->field($model, 'primary_telephone_number') ?>

    <?php // echo $form->field($model, 'alternate_telephone_number') ?>

    <?php // echo $form->field($model, 'physical_house_number_of_primary_residence') ?>

    <?php // echo $form->field($model, 'street_name') ?>

    <?php // echo $form->field($model, 'urbanization_name') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'zip_code') ?>

    <?php // echo $form->field($model, 'have_you_lived_at_this_address_for_2_years_or_more') ?>

    <?php // echo $form->field($model, 'how_many_people_are_in_your_household') ?>

    <?php // echo $form->field($model, 'physical_house_number_of_previous_primary_esidence') ?>

    <?php // echo $form->field($model, 'pstreet_name') ?>

    <?php // echo $form->field($model, 'purbanization_name') ?>

    <?php // echo $form->field($model, 'pstate') ?>

    <?php // echo $form->field($model, 'pcity') ?>

    <?php // echo $form->field($model, 'pzip_code') ?>

    <?php // echo $form->field($model, 'you_own_a_second_or_investment_property') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

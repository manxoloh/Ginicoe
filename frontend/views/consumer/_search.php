<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ConsumerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'business_legal_name') ?>

    <?= $form->field($model, 'business_dba_name') ?>

    <?= $form->field($model, 'business_structure') ?>

    <?php // echo $form->field($model, 'home_based') ?>

    <?php // echo $form->field($model, 'business_legal_address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'business_physical_address') ?>

    <?php // echo $form->field($model, 'pcity') ?>

    <?php // echo $form->field($model, 'pstate') ?>

    <?php // echo $form->field($model, 'pzip') ?>

    <?php // echo $form->field($model, 'federal_tax_id') ?>

    <?php // echo $form->field($model, 'merchant_duns_number') ?>

    <?php // echo $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'middle_name') ?>

    <?php // echo $form->field($model, 'telephone_number') ?>

    <?php // echo $form->field($model, 'toll_free_number') ?>

    <?php // echo $form->field($model, 'fax_number') ?>

    <?php // echo $form->field($model, 'mobile_number') ?>

    <?php // echo $form->field($model, 'email_address') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

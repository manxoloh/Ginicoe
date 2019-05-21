<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>

 <body class="login-body">

    <div class="container">

      <div class="form-signin" action="">
        <h2 class="form-signin-heading"><?php echo Yii::$app->name."&nbsp" ?><?= Html::encode($this->title) ?></h2>

        <div class="login-wrap">
            <div class="user-login-info">
                 <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>'form-control', 'placeholder'=>'Username'])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control','placeholder'=>'Password'])->label(false) ?>

            </div>
            <?= $form->field($model, 'rememberMe')->checkbox(['class'=>'class="form-control'])->label('Remember me') ?>

                <div class="form-group">
                    <?= Html::submitButton('Sign in', ['class' => 'btn btn-lg btn-login btn-block', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

            <div class="registration">
                <!-- Don't have an account yet? -->
                <!-- <a class="" href="registration.html">
                    Create an account
                </a> -->
            </div>

        </div>

        </div>

      </div>

    </div>



<div class="site-login">


    <div class="row">
        <div class="col-lg-5">
           
        </div>
    </div>
</div>

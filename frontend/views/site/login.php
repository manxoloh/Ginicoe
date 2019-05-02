<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
				<div class="white-popup-block">
                        <div class="col-md-8 col-md-offset-2">
                            <h4>Login to your registered account!</h4>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>true])->label(false) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder'=>true])->label(false) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>
						<div class="col-md-12">
							<div class="row">
								<a title="Need new verification email?"
									href="<?= Url::to(['/site/resend-verification-email'])?>">Need new verification email?</a> 
								<a title="Forgot your password?"
									href="<?= Url::to(['/site/request-password-reset'])?>" class="lost-pass-link">Forgot your password?</a>
							</div>
						</div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
                            <p class="link-bottom">Not a member yet? <a href="<?= Url::to(['/site/signup']) ?>">Register now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

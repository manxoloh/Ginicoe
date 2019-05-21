<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="white-popup-block">
					<div class="col-md-4 login-social">
						<h4>Login with social</h4>
						<ul>
							<li class="facebook"><a href="#"> <i class="fab fa-facebook-f"></i>
							</a></li>
							<li class="twitter"><a href="#"> <i class="fab fa-twitter"></i>
							</a></li>
							<li class="linkedin"><a href="#"> <i class="fab fa-linkedin-in"></i>
							</a></li>
						</ul>
					</div>
					<div class="col-md-8 login-custom">
						<h4>Resend verification email</h4>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            
                            <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'placeholder'=>'Please fill out your email. A link to reset password will be sent there.']) ?>
                            
                            <div class="form-group">
                                <?= Html::submitButton('Send', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>

            				<?php ActiveForm::end(); ?>
                        </div>
				</div>
			</div>
		</div>
	</div>
</div>

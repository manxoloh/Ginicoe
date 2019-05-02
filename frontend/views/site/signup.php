<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use common\models\UserTypes;
use kartik\password\PasswordInput;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="white-popup-block">
					<div class="col-md-8 col-md-offset-2">
						<h4>Register a new account</h4>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                            
                            <?= $form->field($model, 'user_type')->dropDownList(ArrayHelper::map(UserTypes::find()->all(), 'type_id', 'user_type'), ['prompt'=>'Select Category']) ?>
            
                            <?= $form->field($model, 'email')->textInput() ?>
            
                            <?=$form->field($model, 'password')->widget(PasswordInput::classname(), ['pluginOptions' => ['showMeter' => true,'toggleMask' => false]]);?>
                            
                            <?= $form->field($model, 'confirm_password')->passwordInput() ?>
            
                			<?= $form->field($model, 'terms_and_conditions')->checkbox()->label('I agree to the Terms and Conditions') ?><br>
                			
                            <div class="form-group">
                                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>
            
                        <?php ActiveForm::end(); ?>
                            <p class="link-bottom">Are you a member? <a href="<?= Url::to(['/site/login']) ?>">Login now</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

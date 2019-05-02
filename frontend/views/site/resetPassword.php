<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
					<div class="col-md-8 col-md-offset-2">
						<h4>Login to your registered account!</h4>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                            
                            <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>
                            
                            <div class="form-group">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>

            				<?php ActiveForm::end(); ?>
                        </div>
				</div>
			</div>
		</div>
	</div>
</div>

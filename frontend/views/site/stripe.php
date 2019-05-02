<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Payment';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="white-popup-block">
					<div class="col-md-8 col-md-offset-2">
						<h4>Credit or debit card</h4>
						<form action="<?= Url::to(['/site/stripe'])?>" method="post"
							id="payment-form">
							<div class="form-row">
								<div id="card-element">
									<!-- a Stripe Element will be inserted here. -->
								</div>
								<!-- Used to display form errors -->
								<div id="card-errors"></div>
							</div>
							<br>
							<button>Submit Payment</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
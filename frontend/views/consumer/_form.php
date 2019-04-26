<?php
use common\models\Industries;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Consumer */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="white-popup-block">

					<h4>Merchant Profile</h4>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'business_legal_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Business legal name'])->label(false) ?>
					</div>
						<div class="col-md-3">
                            <?= $form->field($model, 'business_dba_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Business DBA Name (If different from legal name)'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?=$form->field($model, 'business_structure')->dropDownList(['LLC' => 'LLC','C-Corp' => 'C-Corp','S-Corp' => 'S-Corp','Cooperative' => 'Cooperative','DBA' => 'DBA','Sole Proprietorship' => 'Sole Proprietorship','Contractorship' => 'Contractorship','PC' => 'PC'], ['prompt' => 'Select Business Structure','title' => 'Business Structure'])->label(false)?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'home_based')->dropDownList([1=>'Yes', 0=>'No'], ['prompt'=>'Are you a home based business? ', 'title'=>'Are you a home based business?'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'business_legal_address')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Business Legal Address'])->label(false) ?>
                     </div>
						<div class="col-md-3">   
                            <?= $form->field($model, 'city')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'City'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'state')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'State'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'zip')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Zip'])->label(false) ?>
                        </div>
					</div>
					<h5>Physical Address (If different from legal address)</h5>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'business_physical_address')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Business Physical Address (If different from legal address)'])->label(false) ?>
                     </div>
						<div class="col-md-3">   
                            <?= $form->field($model, 'pcity')->textInput(['maxlength' => true, 'placeholder'=>'City', 'title'=>'City'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'pstate')->textInput(['maxlength' => true, 'placeholder'=>'State', 'title'=>'State'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'pzip')->textInput(['maxlength' => true, 'placeholder'=>'Zip', 'title'=>'Zip'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-6">
                            <?= $form->field($model, 'federal_tax_id')->textInput(['placeholder'=>true, 'title'=>'Federal Tax ID (Required for Partnerships and Corporations)'])->label(false) ?>
                        </div>
						<div class="col-md-5">
                            <?= $form->field($model, 'merchant_duns_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Merchant DUNS Number'])->label(false) ?>
                        </div>
					</div>
					<h5>Main Contact</h5>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'First Name'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Middle Name'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Last Name'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'telephone_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Telephone Number'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'toll_free_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Toll Free Number (If applicable)'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'fax_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Fax Number'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Mobile / Cell Phone (If applicable)'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'email_address')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Email Address'])->label(false) ?>
                    </div>
					</div>

					<h5>Ownership / Partnership</h5>
					<div class="row">
						<div class="col-md-3">
							<?= $form->field($owner, 'owner_partner')->dropDownList(['Owner'=>'Owner', 'Partner'=>'Partner'], ['title'=>''])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'first_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Owner first name'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'middle_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Owner middle name'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'last_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Owner last name'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($owner, 'social_security_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Social Security Number'])->label(false) ?>
                        </div>
						<div class="col-md-3">
							<?= $form->field($owner, 'title_in_business')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Tittle in Business'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'telephone_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Telephone Number'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'ownership_percentage')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Ownership Percentage'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($owner, 'dob')->textInput(['type'=>'date', 'placeholder'=>true, 'title'=>'Date of birth'])->label(false) ?>
                        </div>
						<div class="col-md-3">
							<?= $form->field($owner, 'home_address')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Home address'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'city')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'City'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'state')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'State'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($owner, 'zip')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Zip'])->label(false) ?>
                        </div>
						<div class="col-md-3">
							<?=$form->field($owner, 'number_of_employees')->dropDownList(['1-50' => '1-50', '51-500' => '51-500','501-100' => '501-100','101-500' => '101-500','501-1000' => '501-1000','1000-5000' => '1000-5000','50001-10000' => '50001-10000','10000+' => '10000+'], ['prompt' => 'Number of employees', 'title' => 'Number of employees'])->label(false)?>
                        </div>
						<div class="col-md-3">
							<?=$form->field($owner, 'sales_per_month')->dropDownList(['$0-$3000' => '$0-$3000','$10,000-$50,000 ' => '$10,000-$50,000','$50,000-$100,000' => '$50,000-$100,000','$1000,000-$250,000' => '$1000,000-$250,000','$250,000-$500,000' => '$250,000-$500,000','$500,000-$1,000,000' => '$500,000-$1,000,000','$1,000,000-$3,000,000' => '$1,000,000-$3,000,000','$3,000,000-$5,000,000' => '$3,000,000-$5,000,000','$5,000,000 +' => '$5,000,000 +'], ['prompt' => 'Sales per month (US Dollars)', 'title' => 'Sales per month (US Dollars)'])->label(false)?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'merchant_bank')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Merchant Bank'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($owner, 'account_manager_fn')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Account manager fn'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'physical_address')->textInput(['maxlength' => true, 'placeholder'=>'City', 'title'=>'City'])->label(false) ?>
                        </div>
						<div class="col-md-3">   
                            <?= $form->field($owner, 'pcity')->textInput(['maxlength' => true, 'placeholder'=>'City', 'title'=>'City'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'pstate')->textInput(['maxlength' => true, 'placeholder'=>'State', 'title'=>'State'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($owner, 'pzip')->textInput(['maxlength' => true, 'placeholder'=>'Zip', 'title'=>'Zip'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'account_manager_email_address')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'Account manager email address'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($owner, 'industry')->dropDownList(ArrayHelper::map(Industries::find()->all(), 'ind_id', 'industry'), ['prompt'=>'Which industry does your business belong', 'title'=>'Which industry does your business belong'])->label(false) ?>
                        </div>

						<div class="col-md-12">
							<div class="form-group">
                                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>
						</div>
                        <?php ActiveForm::end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

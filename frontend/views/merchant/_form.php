<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Merchant */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="login-area default-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="white-popup-block">

					<h4>Consumer Profile</h4>
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    
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
                            <?= $form->field($model, 'date_of_birth')->textInput(['type' => 'date', 'placeholder'=>true, 'title'=>'Date of Birth'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'social_security_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'social security number'])->label(false) ?>
                     </div>
						<div class="col-md-3">   
                            <?= $form->field($model, 'primary_telephone_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'primary telephone number'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'alternate_telephone_number')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'alternate telephone number'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'physical_house_number_of_primary_residence')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'physical_house_number_of_primary_residence'])->label(false) ?>
                        </div>
					</div>
					<div class="row">
						<div class="col-md-3">
                            <?= $form->field($model, 'street_name')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'street name'])->label(false) ?>
                     </div>
						<div class="col-md-3">   
                            <?= $form->field($model, 'urbanization_name')->textInput(['maxlength' => true, 'placeholder'=>'City', 'title'=>'City'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'state')->textInput(['maxlength' => true, 'placeholder'=>'State', 'title'=>'State'])->label(false) ?>
                        </div>
						<div class="col-md-3">
                            <?= $form->field($model, 'zip_code')->textInput(['maxlength' => true, 'placeholder'=>'Zip Code', 'title'=>'Zip'])->label(false) ?>
                        </div>
					</div>
					<h5>Questions</h5>
					<div class="row">
						<div class="col-md-12">
                            <?= $form->field($model, 'have_you_lived_at_this_address_for_2_years_or_more')->radioList([1=>'Yes', 0=>'NO'], ['id'=>'lived', 'title'=>'have_you_lived_at_this_address_for_2_years_or_more']) ?>
                        </div>
                        
                        <div id="other"  style="display:none">
						<div class="col-md-12">
                            <?= $form->field($model, 'how_many_people_are_in_your_household')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'how_many_people_are_in_your_household'])->label(false) ?>
                        </div>
                        <div class="row">
						<div class="col-md-3">   
						<?= $form->field($model, 'physical_house_number_of_previous_primary_esidence')->textInput(['maxlength' => true, 'placeholder'=>true, 'title'=>'physical_house_number_of_previous_primary_esidence'])->label(false) ?>
                        
						<?= $form->field($model, 'pstreet_name')->textInput(['maxlength' => true])->label(false) ?>

                        <?= $form->field($model, 'purbanization_name')->textInput(['maxlength' => true])->label(false) ?>
                    
                        <?= $form->field($model, 'pstate')->textInput(['maxlength' => true])->label(false) ?>
                    
                        <?= $form->field($model, 'pcity')->textInput(['maxlength' => true])->label(false) ?>
                    
                        <?= $form->field($model, 'pzip_code')->textInput(['maxlength' => true])->label(false) ?>
						</div>
						</div>
						
                        </div>
					</div>
					<div class="row">
						<div class="col-md-12">
                            <?= $form->field($model, 'you_own_a_second_or_investment_property')->radioList([1=>'Yes', 0=>'NO'], ['title'=>'you_own_a_second_or_investment_property']) ?>
                        </div>
                        </div>
					
                        <?php ActiveForm::end(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php
// Ajax Submit code for adding/Editing countries
$script = <<< JS
$('input[type="radio"]').on('click change', function(e) {
    console.log(e.type);
});
 
JS;
$this->registerJs ( $script );
?>

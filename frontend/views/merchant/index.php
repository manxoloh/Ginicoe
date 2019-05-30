<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MerchantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Merchants';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Merchant', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'middle_name',
            'last_name',
            'user_id',
            //'date_of_birth',
            //'social_security_number',
            //'primary_telephone_number',
            //'alternate_telephone_number',
            //'physical_house_number_of_primary_residence',
            //'street_name',
            //'urbanization_name',
            //'state',
            //'city',
            //'zip_code',
            //'have_you_lived_at_this_address_for_2_years_or_more',
            //'how_many_people_are_in_your_household',
            //'physical_house_number_of_previous_primary_esidence',
            //'pstreet_name',
            //'purbanization_name',
            //'pstate',
            //'pcity',
            //'pzip_code',
            //'you_own_a_second_or_investment_property',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

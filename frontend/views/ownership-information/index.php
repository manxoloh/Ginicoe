<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OwnershipInformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ownership Informations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ownership-information-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ownership Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'owner_id',
            'owner_partner',
            'first_name',
            'middle_name',
            'social_security_number',
            //'title_in_business',
            //'telephone_number',
            //'3ownership_percentage',
            //'dob',
            //'home_address',
            //'city',
            //'state',
            //'zip',
            //'customer_id',
            //'number_of_employees',
            //'merchant_bank',
            //'account_manager_fn',
            //'physical_address',
            //'pcity',
            //'pstate',
            //'pzip',
            //'account_manager_email_address:email',
            //'industry',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

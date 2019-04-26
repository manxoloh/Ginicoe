<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ConsumerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Consumers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Consumer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'business_legal_name',
            'business_dba_name',
            'business_structure',
            //'home_based',
            //'business_legal_address',
            //'city',
            //'state',
            //'zip',
            //'business_physical_address',
            //'pcity',
            //'pstate',
            //'pzip',
            //'federal_tax_id',
            //'merchant_duns_number',
            //'first_name',
            //'middle_name',
            //'telephone_number',
            //'toll_free_number',
            //'fax_number',
            //'mobile_number',
            //'email_address:email',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

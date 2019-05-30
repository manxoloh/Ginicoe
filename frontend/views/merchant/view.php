<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Merchant */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Merchants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="merchant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'middle_name',
            'last_name',
            'user_id',
            'date_of_birth',
            'social_security_number',
            'primary_telephone_number',
            'alternate_telephone_number',
            'physical_house_number_of_primary_residence',
            'street_name',
            'urbanization_name',
            'state',
            'city',
            'zip_code',
            'have_you_lived_at_this_address_for_2_years_or_more',
            'how_many_people_are_in_your_household',
            'physical_house_number_of_previous_primary_esidence',
            'pstreet_name',
            'purbanization_name',
            'pstate',
            'pcity',
            'pzip_code',
            'you_own_a_second_or_investment_property',
        ],
    ]) ?>

</div>

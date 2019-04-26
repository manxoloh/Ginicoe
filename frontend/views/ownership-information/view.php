<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\OwnershipInformation */

$this->title = $model->owner_id;
$this->params['breadcrumbs'][] = ['label' => 'Ownership Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ownership-information-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->owner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->owner_id], [
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
            'owner_id',
            'owner_partner',
            'first_name',
            'middle_name',
            'social_security_number',
            'title_in_business',
            'telephone_number',
            '3ownership_percentage',
            'dob',
            'home_address',
            'city',
            'state',
            'zip',
            'customer_id',
            'number_of_employees',
            'merchant_bank',
            'account_manager_fn',
            'physical_address',
            'pcity',
            'pstate',
            'pzip',
            'account_manager_email_address:email',
            'industry',
        ],
    ]) ?>

</div>

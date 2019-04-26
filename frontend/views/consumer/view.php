<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Consumer */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Consumers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="consumer-view">

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
            'user_id',
            'business_legal_name',
            'business_dba_name',
            'business_structure',
            'home_based',
            'business_legal_address',
            'city',
            'state',
            'zip',
            'business_physical_address',
            'pcity',
            'pstate',
            'pzip',
            'federal_tax_id',
            'merchant_duns_number',
            'first_name',
            'middle_name',
            'telephone_number',
            'toll_free_number',
            'fax_number',
            'mobile_number',
            'email_address:email',
            'created_at',
        ],
    ]) ?>

</div>

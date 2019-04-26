<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OwnershipInformation */

$this->title = 'Update Ownership Information: ' . $model->owner_id;
$this->params['breadcrumbs'][] = ['label' => 'Ownership Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->owner_id, 'url' => ['view', 'id' => $model->owner_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ownership-information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

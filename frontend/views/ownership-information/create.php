<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\OwnershipInformation */

$this->title = 'Create Ownership Information';
$this->params['breadcrumbs'][] = ['label' => 'Ownership Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ownership-information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

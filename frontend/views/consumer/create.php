<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Consumer */

$this->title = 'Create Consumer';
$this->params['breadcrumbs'][] = ['label' => 'Consumers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="consumer-create">

    <?= $this->render('_form', [
        'model' => $model,
        'owner' => $owner,
    ]) ?>

</div>

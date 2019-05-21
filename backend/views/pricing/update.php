<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Pricing */

$this->title = 'Update Pricing: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pricings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">

<div class="row">
<div class="col-sm-12">
	
<section class="panel">
    <header class="panel-heading">
     <h5><?= Html::encode($this->title) ?></h5>
    </header>
    <div class="panel-body">
	<br>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
</section>

</div>
</div>
<!--mini statistics start-->

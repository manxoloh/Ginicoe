<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = $service->title;
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Start Our About
    ============================================= -->
<div class="about-area inc-video default-padding">
	<div class="container">
		<div class="row">
			<!-- Start About -->
			<div class="about-content">
			<img alt="" src="<?= Yii::$app->request->baseUrl ?>admin/<?= $service->image ?>"><br><br>
            <?= $service->detail ?>
            </div>
		</div>
	</div>
</div>
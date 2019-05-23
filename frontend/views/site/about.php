<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use backend\models\About;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$about = About::find()->one();
?>

<!-- Start Our About
    ============================================= -->
<div class="about-area inc-video default-padding">
	<div class="container">
		<div class="row">
			<!-- Start About -->
			<div class="about-content">
				<img alt=""
					src="<?= Yii::$app->request->baseUrl ?>admin/<?= $service->image ?>"><br>
				<br>
            <?= $about->detail ?>
            </div>
		</div>
	</div>
</div>
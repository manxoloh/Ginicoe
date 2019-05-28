<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Pricing';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="pricing" class="pricing-area default-padding bottom-less">
	<div class="container">
		<div class="row">
			<div class="pricing pricing-simple text-center">
			<?php if($prices) { $no = 0; foreach ($prices as $price) { $no++; ?>
				<div class="col-md-3">
					<div class="pricing-item <?= ($no==2) ? "active" : null ?>">
						<ul>
							<li class="icon"><i class="flaticon-start"></i></li>
							<li class="title">
								<h4><?= isset($price['title']) ? $price['title'] : null ?></h4>
							</li>
							<li class="pricing-header">
								<h2>
									<sup>$</sup><?= isset($price['price']) ? $price['price'] : null ?> <sub>/ Year</sub>
								</h2>
							</li>
							<?= isset($price['detail']) ? $price['detail'] : null ?>
							<li class="footer"><a class="btn <?= ($no==2) ? "btn-theme effect" : "btn-dark border" ?> btn-sm" href="<?= Url::to(['/site/stripe', 'plan'=>''])?>">Try
									for free</a></li>
						</ul>
					</div>
				</div>
				<?php }} else {  ?>
				<div class="alert alert-info"><h5>No pricing has been set for this solution</h5></div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
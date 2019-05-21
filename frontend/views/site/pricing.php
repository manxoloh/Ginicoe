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
				<div class="col-md-3">
					<div class="pricing-item">
						<ul>
							<li class="icon"><i class="flaticon-start"></i></li>
							<li class="title">
								<h4>Essential</h4>
							</li>
							<li class="pricing-header">
								<h2>
									<sup>$</sup>0 <sub>/ Year</sub>
								</h2>
							</li>
							<li>basic product with basic features</li>
							<li>FREE enrollment</li>
							<li class="footer"><a class="btn btn-dark border btn-sm" href="<?= Url::to(['/site/stripe', 'plan'=>''])?>">Try
									for free</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing-item active">
						<ul>
							<li class="icon"><i class="flaticon-quality-badge"></i></li>
							<li class="title">
								<h4>Standard</h4>
							</li>
							<li class="pricing-header">
								<h2>
									<sup>$</sup>12 <sub>/ Year</sub>
								</h2>
							</li>
							<li>physical brick–n–mortar POI</li>
							<li>+ Essential</li>
							<li class="footer"><a class="btn btn-theme effect btn-sm"
								href="<?= Url::to(['/site/stripe', 'plan'=>''])?>">Get Started</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing-item">
						<ul>
							<li class="icon"><i class="flaticon-value"></i></li>
							<li class="title">
								<h4>Plus</h4>
							</li>
							<li class="pricing-header">
								<h2>
									<sup>$</sup>29 <sub>/ Year</sub>
								</h2>
							</li>
							<li> digital POI</li>
							<li>+ Standard & Essential</li>
							<li class="footer"><a class="btn btn-dark border btn-sm" href="<?= Url::to(['/site/stripe', 'plan'=>''])?>">Get
									Started</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="pricing-item">
						<ul>
							<li class="icon"><i class="flaticon-value"></i></li>
							<li class="title">
								<h4>Elite</h4>
							</li>
							<li class="pricing-header">
								<h2>
									<sup>$</sup>59 <sub>/ Year</sub>
								</h2>
							</li>
							<li>Premium product with all features</li>
							<li>+ Plus, Standard, & Essential</li>
							<li class="footer"><a class="btn btn-dark border btn-sm" href="<?= Url::to(['/site/stripe', 'plan'=>''])?>">Get
									Started</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
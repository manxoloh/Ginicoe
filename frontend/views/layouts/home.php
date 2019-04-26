<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use odaialali\yii2toastr\ToastrFlash;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search" title="Translate website content" id="google_translate_element"></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= Url::to(['/']) ?>">
                        <img src="theme/img/logo.png" class="logo logo-display" alt="Logo">
                        <img src="theme/img/logo.png" class="logo logo-scrolled" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        
                        <li>
                            <a href="<?= Url::to(['/']) ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/about']) ?>">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Solutions</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= Url::to(['/site/service', 'id'=>'consumer']) ?>">Consumers</a></li>
                                <li><a href="<?= Url::to(['/site/service', 'id'=>'merchant']) ?>">Merchants</a></li>
                                <li><a href="<?= Url::to(['/site/service', 'id'=>'banks']) ?>">Banks</a></li>
                                <li><a href="<?= Url::to(['/site/service', 'id'=>'healthcare']) ?>">Healthcare</a></li>
                                <li><a href="<?= Url::to(['/site/service', 'id'=>'government']) ?>">Government</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/pricing']) ?>">Pricing</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/contact']) ?>">Contact</a>
                        </li>
                        <?php if(Yii::$app->user->isGuest) { ?>
                        <li>
                            <a href="<?= Url::to(['/site/login']) ?>">Login</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="<?= Url::to(['/site/signup']) ?>">Signup</a>
                        </li>
                        <?php } else { ?>
                        <li class="dropdown"><a href="#"
							class="dropdown-toggle active" data-toggle="dropdown"><?= Yii::$app->user->identity->username ?></a>
							<ul class="dropdown-menu">
								<li><a href="<?= Url::to(['/consumer/create']) ?>">Profile</a></li>
								<li><a href="<?= Url::to(['/site/logout']) ?>"
									data-method="post">Logout</a></li>
							</ul></li>
                        <?php } ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <ul>
                        <li>
                            <a href="<?= Url::to(['/']) ?>">Home</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/about']) ?>">About Us</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Solutions</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= Url::to(['/']) ?>">Banks</a></li>
                                <li><a href="<?= Url::to(['/']) ?>">Merchants</a></li>
                                <li><a href="<?= Url::to(['/']) ?>">Consumers</a></li>
                                <li><a href="<?= Url::to(['/']) ?>">Healthcare</a></li>
                                <li><a href="<?= Url::to(['/']) ?>">Government</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/pricing']) ?>">Pricing</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/contact']) ?>">contact</a>
                        </li>
                        <?php if(Yii::$app->user->isGuest) { ?>
                        <li>
                            <a href="<?= Url::to(['/site/login']) ?>">Login</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/signup']) ?>">Signup</a>
                        </li>
                        <?php } else { ?>
                        <li>
                            <a href="<?= Url::to(['/consumer/create']) ?>"><?= Yii::$app->user->identity->username ?></a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/site/logout']) ?>" data-method="post">Logout</a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
        <?= ToastrFlash::widget([
            'options' => [
                "closeButton" => true,
                "debug" => false,
                "newestOnTop" => true,
                "progressBar" => false,
                "positionClass" => 'toast-bottom-right',
                "preventDuplicates" => false,
                "onclick" => null,
                "showDuration" => "1000",
                "hideDuration" => "1000",
                "timeOut" => "6000",
                "extendedTimeOut" => "1000",
                "showEasing" => "swing",
                "hideEasing" => "linear",
                "showMethod" => "fadeIn",
                "hideMethod" => "fadeOut" //Use the jQuery show/hide method of your choice. These default to fadeIn/fadeOut. The methods fadeIn/fadeOut, slideDown/slideUp, and show/hide are built into jQuery.
            ]
        ]);?>
        <?= $content ?>

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items default-padding">
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height item">
                        <div class="f-item">
                            <h4>About</h4>
                            <p>
                                We prevent identity theft and fraud. We protect our customers against data breaches, hacks, data loses, synthetic id fraud, new application fraud, account takeover (ATO) fraud, scams, mishandling, 3rd party breaches, large threat surfaces, unauthorized access, and more.
                            </p>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height item">
                        <div class="f-item link">
                            <h4>Solutions</h4>
                            <ul>
                                <li>
                                    <a href="#">Banks</a>
                                </li>
                                <li>
                                    <a href="#">Consumers</a>
                                </li>
                                <li>
                                    <a href="#">Merchants</a>
                                </li>
                                <li>
                                    <a href="#">Healthcare</a>
                                </li>
                                <li>
                                    <a href="#">Government</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact</h4>
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p><b>Address : </b> Ginicoe Operations, P.O. Box 12521 
                                    <br>East Cleveland, Ohio 44112.
                                    <br><b>E-mail : </b> support@ginicoe.com 
                                    <br><b>Phone : </b>347 - 464 - 9144</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright <?= date("Y") ?>. All Rights Reserved by <a href="#">Ginicoe</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="<?= Url::to(['/site/privacy']) ?>" class="details">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/terms']) ?>" class="details">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/faq']) ?>" class="details">FAQ's</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    

<div class="modal fade" id="Modal">
	<div class="modal-dialog">
		<div class="modal-md">
			<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
				<div class="modal-body"></div>
			</div>
		</div>
	</div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

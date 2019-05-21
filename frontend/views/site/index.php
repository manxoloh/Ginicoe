<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Ginicoe Inc | Home';
?>
<div class="banner-area">
        <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(theme/img/services/Finacial_Banner.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInRight" class="">At Ginicoe We</h3>
                                            <h1 data-animation="animated slideInLeft" class="">Prevent <span>identity theft</span>  and <span> fraud</span>  </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-md btn-outline" href="<?= Url::to(['/site/login']) ?>">Sign in</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md btn-outline" href="<?= Url::to(['/site/signup']) ?>">Sign up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(theme/img/banner/slider.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInUp" class="animated slideInUp">Biometric protection at</h3>
                                            <h1 data-animation="animated slideInDown" class="animated slideInDown">the <span>speed</span> of a <span>smile</span> </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-md btn-outline" href="<?= Url::to(['/site/login']) ?>">Sign in</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md btn-outline" href="<?= Url::to(['/site/signup']) ?>">Sign up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(theme/img/services/Government_Banner.jpg);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft" class="">We provide a suite of </h3>
                                            <h1 data-animation="animated slideInRight" class="">Biometric <span>facial recognition</span> software solution </h1>
                                            <a data-animation="animated slideInUp" class="btn btn-light effect btn-md btn-outline" href="<?= Url::to(['/site/login']) ?>">Sign in</a>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md btn-outline" href="<?= Url::to(['/site/signup']) ?>">Sign up</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="about-area full-width inc-shadow mt default-padding bottom-less">
        <div class="container">
            <div class="row">
                <!-- Start Our Features -->
                <div class="col-md-12 text-center about-items">
                    <div class="row">
                    <div class="site-heading text-center">
                        <h2>Our Procedure</h2>
                        <p>
                            Please follow the following procedure to get access of Ginicoe Protection Services
                        </p>
                    </div>
                        <!-- Single Item -->
                        <div class="col-md-2 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fa fa-chalkboard-teacher "></i>
                                    <h5>Signup</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-2 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fa fa-hand-pointer"></i>
                                    <h5>Pick Plan</h5>
                                </a>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- End Single Item -->
                        <div class="col-md-2 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fa fa-comment"></i>
                                    <h5>Review</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-2 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fa fa-credit-card"></i>
                                    <h5>Payment</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-2 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fa fa-check-circle"></i>
                                    <h5>Approval</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-2 col-sm-6 single-item">
                            <div class="item">
                                <a href="#">
                                    <i class="fa fa-lock"></i>
                                    <h5>Protection</h5>
                                </a>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
                <!-- End Our Features -->
            </div>
        </div>
    </div>
    <div class="services-area default-padding text-light  bottom-less shadow dark bg-fixed" style="background-image: url(theme/img/banner/slider.jpg);">
        <div class="container">
            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height" style="height: 300px;">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-users "></i>
                            </div>
                            <div class="info">
                                <h4>Consumers</h4>
                                <p>
                                    Ginicoe delivers to YOU facial biometric PROTECTION at the SPEED of a Smile 
                                </p>
                                <a href="<?= Url::to(['site/signup']) ?>">Get Started <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height" style="height: 300px;">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-briefcase "></i>
                            </div>
                            <div class="info">
                                <h4>Merchants</h4>
                                <p>
                                    Reduce chargeback expenses, risk category, dispute resolution time lost. 
                                </p>
                                <a href="<?= Url::to(['site/signup']) ?>">Get Started <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height" style="height: 300px;">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-money-check-alt "></i>
                            </div>
                            <div class="info">
                                <h4>Banks</h4>
                                <p>
                                    KYC, CDD, data sharing, to reduce Account takeover fraud, synthetic id fraud. 
                                </p>
                                <a href="<?= Url::to(['site/signup']) ?>">Get Started <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height" style="height: 300px;">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <div class="info">
                                <h4>Government</h4>
                                <p>
                                    Augment e-Verify, TWIC, preventing visa overstays, authenticating SNAP. 
                                </p>
                                <a href="<?= Url::to(['site/signup']) ?>">Get Started <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height" style="height: 300px;">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-medkit"></i>
                            </div>
                            <div class="info">
                                <h4>HealthCare</h4>
                                <p>
                                    Guidance with PHI, HIPPA, HITECH and eRecord security for ubiquitous trusted access. 
                                </p>
                                <a href="<?= Url::to(['site/signup']) ?>">Get Started <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height" style="height: 300px;">
                        <div class="item">
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <div class="info">
                                <h4>Education</h4>
                                <p>
                                    Guest tiled he quick by so these trees am. It announcing alteration at surrounded 
                                </p>
                                <a href="<?= Url::to(['site/signup']) ?>">Get Started <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>

<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [        
        'theme/css/bootstrap.min.css',
        'theme/css/font-awesome.min.css',
        'theme/css/flaticon-set.css',
        'theme/css/magnific-popup.css',
        'theme/css/owl.carousel.min.css',
        'theme/css/owl.theme.default.min.css',
        'theme/css/animate.css',
        'theme/css/bootsnav.css',
        'theme/css/responsive.css',
        'theme/css/style.css',
    ];
    public $js = [
        'theme/js/jquery-1.12.4.min.js',
        'theme/js/bootstrap.min.js',
        'theme/js/equal-height.min.js',
        'theme/js/jquery.appear.js',
        'theme/js/jquery.easing.min.js',
        'theme/js/jquery.magnific-popup.min.js',
        'theme/js/modernizr.custom.13711.js',
        'theme/js/owl.carousel.min.js',
        'theme/js/wow.min.js',
        'theme/js/progress-bar.min.js',
        'theme/js/isotope.pkgd.min.js',
        'theme/js/imagesloaded.pkgd.min.js',
        'theme/js/bootsnav.js',
        'theme/js/main.js',
        'theme/js/custom.js',
        '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit',
        'https://js.stripe.com/v3/',
        'theme/js/stripe.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}

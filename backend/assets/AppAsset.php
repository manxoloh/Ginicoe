<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bucket/bs3/css/bootstrap.min.css',
        'bucket/css/bootstrap-reset.css',
        'bucket/font-awesome/css/font-awesome.css',
        'bucket/css/style.css',
        'bucket/css/style-responsive.css',
    ];
    public $js = [
        'bucket/js/jquery.js',
        'bucket/bs3/js/bootstrap.min.js',
        'bucket/js/jquery.dcjqaccordion.2.7.js',
        'bucket/js/jquery.scrollTo.min.js',
        'bucket/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js',
        'bucket/js/jquery.nicescroll.js',
        'bucket/js/easypiechart/jquery.easypiechart.js',
        'bucket/js/sparkline/jquery.sparkline.js',
        'bucket/js/flot-chart/jquery.flot.js',
        'bucket/js/flot-chart/jquery.flot.tooltip.min.js',
        'bucket/js/flot-chart/jquery.flot.resize.js',
        'bucket/js/flot-chart/jquery.flot.pie.resize.js',
        'bucket/js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

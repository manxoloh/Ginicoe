<?php

use common\models\User;
use backend\models\Pricing;
use backend\models\Slidder;
use backend\models\Solution;

/* @var $this yii\web\View */


$this->title = 'Ginicoe';
?>
<?php
$users_count = User::find()->count();
$solutions_count = Solution::find()->count();
$slidders_count = Slidder::find()->count();
$pricings_count = Pricing::find()->count();
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">

<!--mini statistics start-->
<div class="row">
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-users"></i></span>
            <div class="mini-stat-info">
                <span><?= $users_count ?></span>
                New Users
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span><?= $solutions_count ?></span>
                Solutions
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-th"></i></span>
            <div class="mini-stat-info">
                <span><?= $slidders_count ?></span>
                Slidders
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon green"><i class="fa fa-list"></i></span>
            <div class="mini-stat-info">
                <span><?= $pricings_count ?></span>
                Pricings
            </div>
        </div>
    </div>
</div>
<!--mini statistics end-->

</section>
</section>
<!--main content end-->
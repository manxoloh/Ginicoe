<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">

<div class="row">
<div class="col-sm-12">
     <i><?= Html::encode($this->title) ?></i>
     <span>
        <?= Html::a('<i class="fa fa-plus"></i> Create Solution', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
    </span>
<hr>
</div>
</div>
<div class="row">
<div class="col-sm-12">

    <?php  // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'address1:ntext',
            'address2:ntext',
            'email:email',
            'phone1',
            'phone2',
            'header',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
</div>

</div>
</section>
</section>
<!--main content end-->    
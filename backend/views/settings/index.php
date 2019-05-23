<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\SlidderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Slidders';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">

<div class="row">
<div class="col-sm-12">
     <i><?= Html::encode($this->title) ?></i>
     <span>
        <?= Html::a('<i class="fa fa-plus"></i> Create New About', ['create'], ['class' => 'btn btn-primary pull-right']) ?>
    </span>
<hr>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<section class="panel">
    <div class="modal modal-dialog" id="myModal">
        <div class="modal-body">
             <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//         'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'tag_line',
//             'detail:ntext',
//             'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</section>
</div>

</div>
</section>
</section>
<!--main content end-->    
<?php

use yii\helpers\Html;
use yii\grid\GridView;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel backend\controllers\AboutSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abouts';
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
    <!--  <span>
        <?= Html::a('<i class="fa fa-search"></i> search', ['search'], ['class' => 'btn btn-primary pul-right', 'data-toggle' => 'myModal']) ?>
    </span> -->
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
     <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'title',
            'detail:ntext',
            'image:ntext',
            'action',
            //'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'clientOptions' => [
                "lengthMenu"=> [[20,-1], [20,Yii::t('app',"All")]],
                "info"=>false,
                "responsive"=>true, 
                "dom"=> 'lfTrtip',
                "tableTools"=>[
                    "aButtons"=> [  
                        [
                        "sExtends"=> "copy",
                        "sButtonText"=> Yii::t('app',"Copy to clipboard")
                        ],[
                        "sExtends"=> "csv",
                        "sButtonText"=> Yii::t('app',"Save to CSV")
                        ],[
                        "sExtends"=> "xls",
                        "oSelectorOpts"=> ["page"=> 'current']
                        ],[
                        "sExtends"=> "pdf",
                        "sButtonText"=> Yii::t('app',"Save to PDF")
                        ],[
                        "sExtends"=> "print",
                        "sButtonText"=> Yii::t('app',"Print")
                        ],
                    ]
                ]
            ],
    ]); ?>
</section>
</div>

</div>
</section>
</section>
<!--main content end-->    
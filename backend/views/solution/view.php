<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Solution */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Solutions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!--main content start-->
<section id="main-content">
<section class="wrapper">

<div class="row">
<div class="col-sm-6">
    <section class="panel">
        <header class="panel-heading">
         <h5><?= Html::encode($this->title) ?></h5>
        </p>
        </header>
        <div class="panel-body">
            <span>
                <?= Html::a('<i class="fa fa-pencil"></i>Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary pull-right']) ?>
                <?= Html::a('<i class="fa fa-trash"> </i>&nbsp; Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger pull-right',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </span><br>
            <hr>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'detail:ntext',
            'image',
        ],
    ]) ?>
 </div>
 </section>
</div>
<div class="col-sm-6">
    <img src="<?= Yii::$app->request->baseUrl.$model->image ?>" alt="" width="100%" height="100%">
</div>
</div>
<!--mini statistics start-->

<div class="row">
<div class="col-sm-12">
<?= $model->detail; ?>
</div>
</div>
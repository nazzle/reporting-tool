<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DashboardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Waliofadhiliwa na Mwajiri';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-index">
               
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,                  
        'responsive'=>false,
        'hover'=>true,
        'pjax'=>true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
           // 'beforeGrid'=>'*This provides a list of file destination status.',
           // 'afterGrid'=>'My fancy content after.',
         ],
        'beforeHeader' => [],
        //'resizableColumns'=>true,
        'floatHeader'=>true,         
       // 'showPageSummary' => true,
       // 'pageSummaryRowOptions' => ['class' => 'kv-page-summary warning'],
        'panel' => [
            'type' => GridView::TYPE_SUCCESS,
            'heading' => '<i class="glyphicon glyphicon-folder-open"></i> &nbsp; ORODHA YA WATUMISHI WANAOENDELEA NA MASOMO KWA GHARAMA ZA MWAJIRI',
        ],          
        'toolbar' => [
        [
            'content'=>
                Html::button('<i class="glyphicon glyphicon-print"></i>&nbsp; Print',[
                    'type'=>'button',
                    //'onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['files/create']) . "';",
                    'title'=>Yii::t('kvgrid', 'Print in PDF'), 
                    'class'=>'btn btn-success',
                    'id' =>'filesModal',
                ])
        ],
        '{export}',
        '{toggleData}'
        ], 
                  
         'columns' =>[
             ['class' => 'kartik\grid\SerialColumn'],
             [
                // 'header' => 'Full Name',
                 'attribute'=>'personnel_id',
                 'value' => 'personnel.full_name'
             ],
             [
                 'header' => 'Gender',
                 'attribute'=>'personnel_id',
                 'value' => 'personnel.gender'
             ],
             [
                 'header' => 'Designation',
                 'attribute'=>'personnel_id',
                 'value' => 'personnel.designation'
             ],
             [
                 'header' => 'Work Station',
                 'attribute'=>'personnel_id',
                 'value' => 'personnel.work_station'
             ],
             [
                 'header' => 'Institute',
                 'attribute'=>'course_id',
                 'value' => 'course.facilitator'
             ],
             [
                 'header' => 'Duration',
                 'attribute'=>'course_id',
                 'value' => 'course.duration'
             ],
             [
                 'header' => 'From',
                 'attribute'=>'course_id',
                 'value' => 'course.start_date'
             ],
             [
                 'header' => 'To',
                 'attribute'=>'course_id',
                 'value' => 'course.finish_date'
             ]
             
         ]          
                  
     ]); ?>   
    
</div>    
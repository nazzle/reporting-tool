<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        
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
            'heading' => '<i class="glyphicon glyphicon-list-alt"></i> &nbsp; Training and Courses Dashboard',
        ],          
        'toolbar' => [
        [
            'content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>&nbsp; New Course',[
                    'type'=>'button',
                    'onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['courses/create']) . "';",
                    'title'=>Yii::t('kvgrid', 'Add New Training'), 
                    'class'=>'btn btn-success',
                ]) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>&nbsp; Refresh', ['index'], [
                    'class' => 'btn btn-default', 
                    'title' => Yii::t('kvgrid', 'Reset Grid'),
                ]),
        ],
        '{export}',
        '{toggleData}'
        ],
        
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

            [
                'attribute' =>'sector_id',
                 'value' => 'sectors.synonym'   
             ],
            'course_name',
            'category',
            'duration',
            [
                'attribute' =>'sponsorship_id',
                'value' => 'sponsorship.type'   
             ],
            'venue',
            'facilitator',

            ['class' => 'kartik\grid\ActionColumn',
                'template' => '{view}'
                ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

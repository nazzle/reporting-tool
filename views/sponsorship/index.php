<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SponsorshipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sponsorships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsorship-index">


     <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
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
            'heading' => '<i class="glyphicon glyphicon-list-alt"></i> &nbsp; Sponsorship Types',
        ],          
        'toolbar' => [
        [
            'content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>&nbsp; Add Sponsorship',[
                    'type'=>'button',
                    'onclick'=>"window.location.href = '" . \Yii::$app->urlManager->createUrl(['sponsorship/create']) . "';",
                    'title'=>Yii::t('kvgrid', 'Add New Training'), 
                    'class'=>'btn btn-success',
                    'id' =>'filesModal',
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
            ['class' => 'yii\grid\SerialColumn'],

            'type',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

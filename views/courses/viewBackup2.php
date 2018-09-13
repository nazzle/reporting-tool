<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="courses-view">

<?php
    // DetailView Attributes Configuration
$attributes = [
    [
        'group'=>true,
        'label'=>'SECTION 1: Training/Course Information',
        'rowOptions'=>['class'=>'info']
    ],
    [
        'columns' => [
            [
                'attribute'=>'course_name', 
                'label'=>'Name of Training/Course',
                'value'=>$model->course_name,
                'displayOnly'=>true,
                'valueColOptions'=>['style'=>'width:30%']
            ],
            [
                'attribute'=>'start_date', 
                'label'=>'From', 
                'value'=>$model->start_date,
                'valueColOptions'=>['style'=>'width:30%'], 
                'displayOnly'=>true
            ],
        ],
    ],
    [
        'columns' => [
            [
                'attribute'=>'category',
                'label'=>'Category',
                'value'=>$model->category,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
            [
                'attribute'=>'finish_date', 
                'label'=>'To', 
                'value'=>$model->finish_date,
                'valueColOptions'=>['style'=>'width:30%'], 
            ],
        ],
    ],
    [
        'group'=>true,
        'label'=>'SECTION 2: Venue and Sponsor details',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'sector_id',
        'value'=>$model->sector_id,
        'label'=>'Sector  (Targeted Department)',
        'valueColOptions'=>['style'=>'width:30%'],
    ],
    [
        'attribute'=>'venue',
        'label'=>'Venue',
        'value'=>$model->venue,
        'valueColOptions'=>['style'=>'width:30%'],
    ],
    [
        'attribute'=>'sponsorship_id',
        'label'=>'Sponsor/Fund',
        'value'=>$model->sponsorship_id,
        'valueColOptions'=>['style'=>'width:30%'],
    ],
    [
        'attribute'=>'duration',
        'label'=>'Duration (Course Timeframe)',
        'value'=>$model->duration,
        'valueColOptions'=>['style'=>'width:30%'],
    ],
    [
        'group'=>true,
        'label'=>'SECTION 3: Budget and Finance Deatails',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],
    [
        'columns' => [
            [
                'attribute'=>'sector_id',
                'label'=>'Allocated Budget (Planned)',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
            [
               'attribute'=>'sector_id',
                'label'=>'Balance',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
        ]
    ],
    [
        'columns' => [
            [
                'attribute'=>'sector_id',
                'label'=>'Budget Spent',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
            [
                'attribute'=>'sector_id',
                'label'=>'% Used budget',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
        ]
    ],
    [
        'attribute'=>'sector_id',
        'label'=>'Sector',
        'value'=>$model->sector_id,
        'valueColOptions'=>['style'=>'width:30%'],
    ],
       
    [
        'group'=>true,
        'label'=>'SECTION 4: Participants And Attendance',
        'rowOptions'=>['class'=>'info'],
        //'groupOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'sector_id',
        'label'=>'Total number of participants',
        'value'=>$model->sector_id,
        'valueColOptions'=>['style'=>'width:30%'],
    ],
    [
        'columns' => [
            [
                'attribute'=>'sector_id',
                'label'=>'Male',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
            [
               'attribute'=>'sector_id',
                'label'=>'% Male',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
        ]
    ],
    [
        'columns' => [
            [
                'attribute'=>'sector_id',
                'label'=>'Female',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
            [
                'attribute'=>'sector_id',
                'label'=>'% Female',
                'value'=>$model->sector_id,
                'valueColOptions'=>['style'=>'width:30%'],
            ],
        ]
    ],
    [
        'attribute'=>'sector_id',
        'label'=>'Attachment',
        'value'=>$model->sector_id,
        'valueColOptions'=>['style'=>'width:30%'],
    ],
    
];


    
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
        'mode' => 'view',
        'panel' => [
            'type' => DetailView::TYPE_SUCCESS,
            'heading' => '<i class="glyphicon glyphicon-list-alt"></i> &nbsp; Training and Course Details',
        ],
        'mode'=>DetailView::MODE_VIEW,
        'bordered' => TRUE,
        'striped' => TRUE,
        'condensed' => TRUE,
        'responsive' => TRUE,
        'hover' => TRUE,
        'hAlign'=>TRUE,
        'vAlign'=>TRUE,
        'fadeDelay'=>TRUE,
        'deleteOptions'=>[ // your ajax delete parameters
            'params' => ['id' => 1000, 'kvdelete'=>true],
        ],
        'container' => ['id'=>'kv-demo'],
        'formOptions' => ['action' => Url::current(['courses/delete' => 'kv-demo'])] // your action to delete
        
    ]) ?>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>

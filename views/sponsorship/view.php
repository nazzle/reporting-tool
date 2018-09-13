<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsorship */

$this->title = $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Sponsorships', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sponsorship-view">
    
<?=  DetailView::widget([
    'model'=>$model,
    'condensed'=>true,
    'hover'=>true,
    'mode'=>DetailView::MODE_VIEW,
    'panel'=>[
        'heading'=>$model->type,
        'type'=>DetailView::TYPE_INFO,
        'footer' => ''
    ],
    'attributes'=>[
//        'id',
        'type',
        'description',
//        ['attribute'=>'type', 'type'=>DetailView::INPUT_DATE],
    ]
]); ?>
    
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

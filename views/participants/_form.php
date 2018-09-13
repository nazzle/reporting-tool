<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Personnel;
use kartik\widgets\Select2;
use yii\bootstrap\Collapse;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Participants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participants-form">

    <?php $form = ActiveForm::begin(['id' => 'dynamic-form']); ?>

    <?= $form->field($courses, 'course_name')->textInput(['readonly'=>true]) ?>

    <?= $form->field($model, 'personnel_id[]')->widget(Select2::classname(),[
    'name' => 'kv-state-210',
    'data' =>[ArrayHelper::map(Personnel::find()->all(), 'id', 'full_name')],
    'size' => Select2::MEDIUM,
    'options' => [
        'multiple'=>'true',
        'data' =>['personnel_id[]'],
        'placeholder' => 'Select Personnel to enroll...',
        'class'=>'form-control',
        ],
    'pluginOptions' => [
        'allowClear' => true
      ],
        ])    
            ?>

    <?= 
        Collapse::widget([
        'items' => [ 
            '+ Add PDF attachment' =>
            $form->field($model, 'attachment')->textInput(['maxlength' => true]) 
             ]
            ])      
              ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

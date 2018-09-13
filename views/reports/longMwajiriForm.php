<?php    
    use yii\helpers\Html;
    use kartik\widgets\ActiveForm;
    use kartik\builder\Form;
    use app\models\Sectors;
    use app\models\Personnel;
    use app\models\Courses;
    use yii\helpers\ArrayHelper;
    
    $this->title = 'Report Request Form';
    
    $form = ActiveForm::begin([
                        'type'=>ActiveForm::TYPE_VERTICAL,
                        'action' => ['reports/index']
                            ]);
           
    echo Form::widget([
        'model'=>$courses,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[       // 2 column layout
            'category'=>['type'=>Form::INPUT_DROPDOWN_LIST,'options'=>['placeholder'=>'Enter username...'],'items'=>[ 'LONG' => 'LONG', 'SHORT' => 'SHORT', ]],
            'sector_id'=>['type'=>Form::INPUT_DROPDOWN_LIST, 'options'=>['placeholder'=>'Enter respective sector...'],
                            'items'=>[ArrayHelper::map(Sectors::find()->all(), 'id', 'synonym')]]
        ]
    ]);
  
    echo Form::widget([       // 3 column layout
        'model'=>$personnel,
        'form'=>$form,
        'columns'=>4,
        'attributes'=>[
            'designation'=>[
                'type'=>Form::INPUT_DROPDOWN_LIST, 
                'options'=>['placeholder'=>'Select designation...'], 
                'items'=>[ArrayHelper::map(Personnel::find()->all(), 'id', 'designation')],
                'hint'=>'Filter by Participants Designations'
            ],
            'gender'=>[
                'type'=>Form::INPUT_DROPDOWN_LIST, 
                'options'=>['placeholder'=>'Select gender...'], 
                'items'=>[ArrayHelper::map(Personnel::find()->all(), 'id', 'gender')],
                'hint'=>'Filter by Gender'
            ],
            'work_station'=>[
                'type'=>Form::INPUT_DROPDOWN_LIST, 
                'options'=>['placeholder'=>'Select work station...'], 
                'items'=>[ArrayHelper::map(Personnel::find()->all(), 'id', 'work_station')],
                'hint'=>'Filter by Work station'
            ],
            'actions'=>[
                'type'=>Form::INPUT_RAW, 
                'value'=>'<div style="text-align: right; margin-top: 20px">' . 
                    Html::resetButton('Reset Fields', ['class'=>'btn btn-default']) . ' ' .
                    Html::submitButton('Query Report', ['type'=>'button', 'class'=>'btn btn-primary']) . 
                    '</div>'
            ],
        ]
    ]);


    ActiveForm::end();

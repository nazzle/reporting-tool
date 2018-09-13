<?php
    
    use yii\helpers\Html;
    use kartik\widgets\ActiveForm;
    use kartik\builder\Form;
    use app\models\Sectors;
    use app\models\Sponsorship;
    use yii\helpers\ArrayHelper;
    
    $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);
        echo Form::widget([       // 1 column layout
        'model'=>$model,
        'form'=>$form,
        'columns'=>1,
        'attributes'=>[
            'course_name'=>['type'=>Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter Course/Training name...']],
        ]
    ]);
        
     echo Form::widget([       // 2 column layout
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'objective'=>[
                'type'=>Form::INPUT_TEXTAREA, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'Purpose and Intention to achieve.'
            ],
            'facilitator'=>[
                'type'=>Form::INPUT_TEXT, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'Training Educator'
            ],
        ]
    ]);   
    
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[       // 2 column layout
            'category'=>['type'=>Form::INPUT_DROPDOWN_LIST,'options'=>['placeholder'=>'Enter username...'],'items'=>[ 'LONG' => 'LONG', 'SHORT' => 'SHORT', ]],
            'sector_id'=>['type'=>Form::INPUT_DROPDOWN_LIST, 'options'=>['placeholder'=>'Enter respective sector...'],
                            'items'=>[ArrayHelper::map(Sectors::find()->all(), 'id', 'synonym')]]
        ]
    ]);
  
    echo Form::widget([       // 3 column layout
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'attributes'=>[
            'duration'=>[
                'type'=>Form::INPUT_WIDGET, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'Course Timeframes (i.e. in Days/Weeks/Months)'
            ],
            'start_date'=>[
                'type'=>Form::INPUT_WIDGET, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'Enter start date (mm/dd/yyyy)'
            ],
            'finish_date'=>[
                'type'=>Form::INPUT_WIDGET, 
                'widgetClass'=> '\kartik\widgets\DatePicker', 
                'hint'=>'Enter end date (mm/dd/yyyy)'
            ],
        ]
    ]);
    
     echo Form::widget([       // 2 column layout
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'sponsorship_id'=>[
                'type'=>Form::INPUT_DROPDOWN_LIST, 
                'items'=>[ArrayHelper::map(Sponsorship::find()->all(), 'id', 'type')],
                'options'=>['placeholder'=>'Enter respective sector...'], 
                'hint'=>'Training/Course Funding'
            ],
            'venue'=>[
                'type'=>Form::INPUT_TEXT, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'Place of Event'
            ],
        ]
    ]);
     
     echo Form::widget([       // 2 column layout
        'model'=>$budget,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'allocated_budget'=>[
                'type'=>Form::INPUT_TEXT, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'Planned Budget for Training'
            ],
            'budget_spent'=>[
                'type'=>Form::INPUT_TEXT, 
                'widgetClass'=>'\kartik\widgets\DatePicker', 
                'hint'=>'The amount Used'
            ],
            'actions'=>[
                'type'=>Form::INPUT_RAW, 
                'value'=>'<div style="text-align: right; margin-top: 20px">' . 
                    Html::resetButton('Reset', ['class'=>'btn btn-default']) . ' ' .
                    Html::submitButton('Submit', ['type'=>'button', 'class'=>'btn btn-primary']) . 
                    '</div>'
            ],
        ]
    ]);
    ActiveForm::end();
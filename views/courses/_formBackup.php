<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category')->dropDownList([ 'LONG' => 'LONG', 'SHORT' => 'SHORT', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sector_id')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput() ?>

    <?= $form->field($model, 'finish_date')->textInput() ?>

    <?= $form->field($model, 'sponsorship_id')->textInput() ?>

    <?= $form->field($model, 'venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'budget_id')->textInput() ?>

    <?= $form->field($model, 'objective')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facilitator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

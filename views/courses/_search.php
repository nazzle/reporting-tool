<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoursesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'course_name') ?>

    <?= $form->field($model, 'category') ?>

    <?= $form->field($model, 'sector_id') ?>

    <?= $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'finish_date') ?>

    <?php // echo $form->field($model, 'sponsorship_id') ?>

    <?php // echo $form->field($model, 'venue') ?>

    <?php // echo $form->field($model, 'budget_id') ?>

    <?php // echo $form->field($model, 'objective') ?>

    <?php // echo $form->field($model, 'facilitator') ?>

    <?php // echo $form->field($model, 'course_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

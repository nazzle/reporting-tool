<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Participants */

$this->title = 'Create Participants';
$this->params['breadcrumbs'][] = ['label' => 'Participants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="participants-create">


    <?= $this->render('_form', [
        'model' => $model,
        'courses' => $courses
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sponsorship */

$this->title = 'Update Sponsorship: ' . $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Sponsorships', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sponsorship-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

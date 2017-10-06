<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Phone */

$this->title = 'Изменить статус заявки: ' . $model->phone;
$this->params['breadcrumbs'][] = ['label' => 'Phones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phone-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
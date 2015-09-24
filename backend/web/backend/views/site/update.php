<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Solicitudes */

$this->title = Yii::t('solicitudes', 'Update {modelClass}: ', [
    'modelClass' => 'Solicitudes',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('solicitudes', 'Solicitudes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('solicitudes', 'Update');
?>
<div class="solicitudes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

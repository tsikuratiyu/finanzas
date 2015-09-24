<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Solicitudes */

$this->title = Yii::t('solicitudes', 'Create Solicitudes');
$this->params['breadcrumbs'][] = ['label' => Yii::t('solicitudes', 'Solicitudes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitudes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

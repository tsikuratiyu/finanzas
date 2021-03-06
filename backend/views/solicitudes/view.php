<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Solicitudes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitudes-view col-md-4">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?=
    //  DetailView::widget([
    //     'model' => $model,
    //     'attributes' => [
    //         'id',
    //         'titulo',
    //         'fecha',
    //         'solicitante',
    //         'monto',
    //         'comentario',
    //         'usuario',
    //         'fecha_actualizacion',
    //     ],
    // ]) 
        DetailView::widget([
            'model'=>$model,
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'Solicitud # ' . $model->id,
                'type'=>DetailView::TYPE_INFO,
            ],
            'attributes'=>[
                'id',
                'titulo',
                ['attribute'=>'fecha', 'type'=>DetailView::INPUT_DATE],
                ['attribute'=>'estatus', 'type'=>DetailView::INPUT_DROPDOWN_LIST]
            ]
        ]);
    ?>

</div>
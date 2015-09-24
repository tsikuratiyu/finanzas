<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\BuscarSolicitudes */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitudes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitudes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitudes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'fecha',
            'solicitante',
            'monto',
            // 'comentario',
            // 'usuario',
            // 'fecha_actualizacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
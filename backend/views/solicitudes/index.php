<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use backend\models\Solicitantes;
use dosamigos\datepicker\DatePicker;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\BuscarSolicitudes */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitudes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitudes-index well">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Solicitudes', ['Crear'], ['class' => 'btn btn-success']) ?>
    </p>
   

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            [
                'label' => 'id',
                'format' => 'raw',
                'value' => 'id',
                'contentOptions'=>['style'=>'max-width: 100px;'] // <-- right here
            ],
            'titulo',
            [
                'attribute'=>'fecha',
                'value'=>'fecha',
                'format'=>'raw',
                 // <-- right here
                'filter'=>DatePicker::widget([
                        'model' => $searchModel,
                        'attribute' => 'fecha',                        
                            'clientOptions' => [
                                'autoclose' => true,
                                'format' => 'yyyy-mm-dd'
                            ],

                    ]),
                'contentOptions'=>['style'=>'width: 200px;']

            ],
            [
                    'attribute' => 'solicante',
                    'value' => 'solicitante',
                    'filter' => Html::activeDropDownList($searchModel, 'solicitante', ArrayHelper::map(Solicitantes::find()->asArray()->all(), 'id', 'name'),['class'=>'form-control','prompt' => 'Selecciona']),
            ],
            'monto',
            'comentario',
            'usuario',
            //'fecha_actualizacion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use backend\models\Solicitantes;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\Solicitudes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitudes-form col-md-4" >

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha')->widget(DatePicker::className(), [
        'language' => 'es',
        'size' => 'sm',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-M-dd'
        ]
    ]);?>

    <?= $form->field($model, 'solicitante')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Solicitantes::find()->all(), 'id', 'name'),
            'language' => 'de',
            'options' => ['placeholder' => 'Selecciona..'],
            'pluginOptions' => [
                'allowClear' => false
            ],
        ]); ?>

   
    <?= $form->field($model, 'monto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comentario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario')->textInput(array(                                
                                'disabled'=>false,
                                'value'=>Yii::$app->user->identity->username                               
                                )) ?>

    <?= $form->field($model, 'fecha_actualizacion')->textInput(array(                                
                                'disabled'=>false,
                                'value'=>date('Y/m/d')                               
                                )) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
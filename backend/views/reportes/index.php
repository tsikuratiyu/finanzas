<?php 

use yii\helpers\Html;
use kartik\builder\Form;

$this->title = 'Filtro';
echo '<div class="well">';
echo Html::beginForm('BuscarSolicitudes', 'post', ['class'=>'form-vertical']);
echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller 
    // using $_POST['kvform']
    'formName'=>'form-filtro',
    
    // default grid columns
    'columns'=>3,
    
    // set global attribute defaults
    'attributes'=>[
        'unidad'=>['label'=>'Presupuesto', 'type'=>Form::INPUT_RADIO_LIST,'items'=>[0=>'Recepción',1=>'Contabilidad', 2=>'Presupuesto'], ],
    ]
]);
echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller 
    // using $_POST['kvform']
    'formName'=>'form-filtro',
    
    // default grid columns
    'columns'=>3,
    
    // set global attribute defaults
    'attributes'=>[
        'de'=>['label'=>'From Date', 'type'=>Form::INPUT_WIDGET, 'widgetClass'=>'\kartik\widgets\DatePicker'],
        'a'=>['label'=>'To Date', 'type'=>Form::INPUT_WIDGET, 'widgetClass'=>'\kartik\widgets\DatePicker'],
    ]
]);
echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller 
    // using $_POST['kvform']
    'formName'=>'form-filtro',
    
    // default grid columns
    'columns'=>4,
    
    // set global attribute defaults
    'attributes'=>[
        'fld6'=>['label'=>'Estatus', 'type'=>Form::INPUT_WIDGET,'widgetClass'=>'\kartik\widgets\Select2','data'=>[0=>'Recepción',1=>'Contabilidad', 2=>'Presupuesto'],],
        'fld7'=>['label'=>'Tipo de Solicitud', 'type'=>Form::INPUT_WIDGET,'widgetClass'=>'\kartik\widgets\Select2','data'=>[0=>'Recepción',1=>'Contabilidad', 2=>'Presupuesto'],],
        'fld8'=>['label'=>'Tipo de Solicitud', 'type'=>Form::INPUT_WIDGET,'widgetClass'=>'\kartik\widgets\Select2','data'=>[0=>'Recepción',1=>'Contabilidad', 2=>'Presupuesto'],],
    ]
]);
echo Form::widget([
    // formName is mandatory for non active forms
    // you can get all attributes in your controller 
    // using $_POST['kvform']
    'formName'=>'form-filtro',
    
    // default grid columns
    'columns'=>4,
    
    // set global attribute defaults
    'attributes'=>[
    'fld9'=>['type'=>Form::INPUT_RAW, 'value'=>'<div class="espacio"></div><div class="form-inline">
            <div class="controls-row">                    
                    <label class="radio-inline"><input type="radio" name="opc" value="afin">Nro AFIN</label>
                    <label class="radio-inline"><input type="radio" name="opc" value="ures">URes</label>
                    <label class="radio-inline"><input type="radio" name="opc" value="concepto">Concepto</label>
            </div>
            </div>
    <div class="row"><div class="col-lg-4"><div class="input-group">'.Html::input('text', 'abuscar', 'Buscar',['class' => 'form-control']).' <span class="input-group-btn">'.Html::submitButton('Ir!', ['class'=>'btn btn-primary']).'</span></div></div></div>'],
    ]
]);

echo Html::endForm();

    echo '</div>';
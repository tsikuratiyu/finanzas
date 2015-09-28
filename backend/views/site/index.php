<?php
use dosamigos\datepicker\DateRangepicker;
use yii\db\query;
use backend\models\Solicitudes;
use backend\models\Solicitantes;
use dosamigos\chartjs\ChartJs;

$rangop = DateRangePicker::widget([
    'name' => 'rango_d',
    'value' => '02-16-2012',
    'nameTo' => 'rango_h',
    'valueTo' => '02-20-2012'
]);
$recibidas = Solicitudes::find()->where('estatus=0')->count('id');
$enproceso = Solicitudes::find()->where('estatus=1')->count('id');
$pagadas = Solicitudes::find()->where('estatus=2')->count('id');
$comprobadas = Solicitudes::find()->where('estatus=3')->count('id');

/* @var $this yii\web\View */

$this->title = 'Admin';
?>
<div class="site-index"> 
   
    <div class="body-content">

        <div class="row">
              </div><!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-cogs"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Recibidas</span>
                  <span class="info-box-number"><?= $recibidas?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-cogs"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">En proceso</span>
                  <span class="info-box-number"><?= $enproceso?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-orange"><i class="fa fa-money"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pagadas</span>
                  <span class="info-box-number"><?= $pagadas?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Comprobadas</span>
                  <span class="info-box-number"><?= $comprobadas?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div>
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Reporte mensual</h3>
                  <div class="range">
                    <?php echo $rangop;?>
                    </div>
                  <div class="box-tools pull-right">
                    <button class="btn bn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Solicitudes: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                       
                            <?= ChartJs::widget([
                                'type' => 'Line',
                                'options' => [
                                    'height' => 150,
                                    'width' => 400
                                ],
                                  'data' => [



                                    'labels' => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
                                    'datasets' => [
                                        [
                                            'fillColor' => "rgba(151,187,205,0.5)",
                                            'strokeColor' => "rgba(151,187,205,1)",
                                                       'pointStrokeColor' => "#fff",
                                            'data' => [4, 2, 8, 5, 8, 1, 7]
                                        ],
                                        [
                                            'fillColor' => "rgba(0, 250, 92, 0.5)",
                                            'strokeColor' => "rgba(220,220,220,1)",
                                            'pointColor' => "rgba(220,220,220,1)",
                                            'pointStrokeColor' => "#fff",
                                            'data' => [$recibidas,$enproceso,$pagadas,$comprobadas]
                                        ]
                                    ]
                                ]
                            ]);
                            ?>
                          
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                       <p class="text-center">
                        <strong>Progreso general</strong>
                      </p>
                    <div class="progress-group">
                       <span class="progress-text">Recepción de Solicitudes</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Unidad de Contabilidad</span>
                        <span class="progress-number"><b>100</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 50%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Unidad de Presupuesto</span>
                        <span class="progress-number"><b>185</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 70%"></div>
                        </div>      
                      </div><!-- /.progress-group -->
                        <div class="progress-group">
                        <span class="progress-text">Cheques</span>
                        <span class="progress-number"><b>200</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 100%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$35,210.43</h5>
                        <span class="description-text">TOTAL REVENUE</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">TOTAL COST</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">$24,813.53</h5>
                        <span class="description-text">TOTAL PROFIT</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">1200</h5>
                        <span class="description-text">GOAL COMPLETIONS</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div>
        </div>

    </div>
</div>

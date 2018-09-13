<?php

/* @var $this yii\web\View */
use yii\bootstrap\Collapse;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->title = 'JTRT | Reports';
?>
<div class="site-index">

    <div class="body-content">
        <div class="jumbotron">
            
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab">Summaries</a></li>
                  <li><a href="#tab_2-2" data-toggle="tab">Custom</a></li>
                  <li><a href="#tab_3-2" data-toggle="tab">General</a></li>
                  <li class="pull-left header"><i class="fa fa-line-chart"></i> Training Reports</li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1-1">
                      <div class="box">
                <div class="box-header">
                  <h3 class="box-title">System Summary Reports</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Report type</th>
                    </tr>
                   
                    <tr>
                      <td>1.</td>
                    <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                            Muhtasari-Walioko masomoni kwa gharama za mwajiri. 
                         </a>
                    </td>  
                    </tr>
                    
                    <tr>
                      <td>2.</td>
                      <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                            Muhtasari-Walioko masomoni kwa gharama binafsi. 
                         </a>
                    </td> 
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                            Summary report-Short term training. 
                         </a>
                    </td> 
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                  </div><!-- /.tab-pane -->
                  
                  
                  <div class="tab-pane" id="tab_2-2">
                     <div class="box">
                <div class="box-header">
                  <h3 class="box-title">System Custom Reports</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Report type</th>
                    </tr>
                    <tr>
                      <td>1.</td>
                    <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                         Orodha ya watumishi wanaoendelea na masomo kwa gharama ya mwajiri. 
                        </a>
                    </td>  
                    </tr>
                    <tr>
                      <td>2.</td>
                    <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                         Orodha ya watumishi wanaoendelea na masomo kwa gharama binafsi. 
                        </a>
                    </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                    <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                         Orodha ya watumishi waliohitimu/kutoa taarifa ya kuripoti vituoni baada ya masomo. 
                        </a>
                    </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                     <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                         Orodha ya watumishi walioshindwa/sitisha kuendelea na masomo kutokana na sababu mbalimbali. 
                        </a>
                    </td>
                    </tr>
                    <tr>
                      <td>5.</td>
                     <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                         Orodha ya watumishi waliohudhuria mafunzo ya muda mfupi. 
                        </a>
                    </td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                  </div><!-- /.tab-pane -->
                  
                  
                  <div class="tab-pane" id="tab_3-2">
                     <div class="box">
                <div class="box-header">
                  <h3 class="box-title">System General Reports</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Report type</th>
                    </tr>
                   
                    <tr>
                      <td>1.</td>
                    <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                            Orodha ya mafunzo yaliyofanyika (long training). 
                        </a>
                    </td>  
                    </tr>
                    <tr>
                      <td>2.</td>
                       <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                            Orodha ya mafunzo yaliyofanyika (short training). 
                        </a>
                    </td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td align="left"> 
                        <a href="<?= Url::to(['reports/index'])?>">
                            Uhusiano-Waliohitimu dhidi ya waliositisha mafunzo. 
                        </a>
                    </td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td align="left">Fix and squish bugs</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            
        </div>
    </div>
</div>

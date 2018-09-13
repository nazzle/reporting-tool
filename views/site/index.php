<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'JTRT | Home';
?>
<div class="site-index">

    <div class="body-content">
        <div class="jumbotron">

          <!-- Info boxes -->
        
          <div class="row"> 
               <!-- This directs to Training and courses dashboard -->
             <a href="<?= Url::to(['courses/index'])?>">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-th-list"></i></span>
                <div class="info-box-content">     
                  <span class="info-box-text">DASHBOARD</span>
                  <span class="info-box-number">Trainings<small> Courses</small></span> 
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>
            
                <!-- This directs to statistic Page -->
            <a href="<?= Url::to(['site/statistics'])?>">    
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa  fa-pie-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">STATISTICS</span>
                  <span class="info-box-number">Graphical info</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            </a>

            <!-- This directs to settings and configurations Page -->
            <div class="clearfix visible-sm-block"></div>
            
            <a href="<?= Url::to(['site/configurations'])?>">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-cogs"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">CONFIGURATIONS</span>
                  <span class="info-box-number">Settings</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
             </a>
            
            <!-- This directs to settings and configurations Page -->
            <a href="<?= Url::to(['site/reports'])?>">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-line-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">REPORTS</span>
                  <span class="info-box-number">Evaluation</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
             </a>
            
          </div><!-- /.row -->
        </div>

    </div>
</div>

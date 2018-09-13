<?php

//use kartik\detail\DetailView;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Courses */

$this->title = $model->category;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 

<script>
    $(function()
    {

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 700,
            color: "#f56954",
            highlight: "#f56954",
            label: "Chrome"
          },
          {
            value: 500,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "IE"
          },
          {
            value: 400,
            color: "#f39c12",
            highlight: "#f39c12",
            label: "FireFox"
          },
          {
            value: 600,
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "Safari"
          },
          {
            value: 300,
            color: "#3c8dbc",
            highlight: "#3c8dbc",
            label: "Opera"
          },
          {
            value: 100,
            color: "#d2d6de",
            highlight: "#d2d6de",
            label: "Navigator"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);  
    }
            
            );
</script>

<?php
//Important Queries for the view 
//Combining multiple tables.

/**
 * 1.% Spent Budget
 */

?>
<div class="courses-view">
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Training/Course Details
            <small><?= $model->category ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Courses Dashboard</a></li>
            <li class="active">Course Details</li>
          </ol>
        </section>

        <div class="pad margin no-print">
          <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing in PDF format. Click the print button at the bottom left of the detail page.
          </div>
        </div>

        <!-- Main content -->
        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-book"></i> <?= $model->course_name ?>
                <small class="pull-right">Starts: <?= $model->start_date ?></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <p class="lead"><strong>A:</strong> Course Type Details:</p>
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Sector/Cadre</strong><br>
               <?= DetailView::widget(['model'=>$model,'attributes' => ['sectors.synonym'],'template'=>'<tr><td>{value}</td></tr>',]) ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Sponsorship Type (Funding)</strong><br>
                <?= DetailView::widget(['model'=>$model,'attributes' => ['sponsorship.type',],'template'=>'<tr><td>{value}</td></tr>',]) ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <strong>Course Duration</strong><br>
              <?= DetailView::widget(['model'=>$model,'attributes' => ['duration'],'template'=>'<tr><td>{value}</td></tr>',]) ?>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Category Type</strong><br>
               <?= DetailView::widget(['model'=>$model,'attributes' => ['category'],'template'=>'<tr><td>{value}</td></tr>',]) ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Start Date</strong><br>
                <?= DetailView::widget(['model'=>$model,'attributes' => ['start_date',],'template'=>'<tr><td>{value}</td></tr>',]) ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <strong>Finish Date</strong><br>
              <?= DetailView::widget(['model'=>$model,'attributes' => ['finish_date'],'template'=>'<tr><td>{value}</td></tr>',]) ?>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Facilitator (Educator)</strong><br>
               <?= DetailView::widget(['model'=>$model,'attributes' => ['facilitator'],'template'=>'<tr><td>{value}</td></tr>',]) ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Venue (Place Of Event)</strong><br>
                <?= DetailView::widget(['model'=>$model,'attributes' => ['venue',],'template'=>'<tr><td>{value}</td></tr>',]) ?>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <strong>Course Status (As per up to date)</strong><br>
              <?= DetailView::widget(['model'=>$model,'attributes' => ['status.name'],'template'=>'<tr><td>{value}</td></tr>',]) ?>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
               <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              <p class="lead"><strong>B:</strong> Course Objective:</p>
              <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                <?= $model->objective ?>
              </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <p class="lead"><strong>C:</strong> Course Budgeting Details:</p>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Allocated Budget (Tsh) :</th>
                    <td><?= DetailView::widget(['model'=>$model,'attributes' => ['budget.allocated_budget',],'template'=>'<tr><td>{value}</td></tr>',]) ?></td>
                  </tr>
                  <tr>
                    <th>Budget Spent (Tsh) :</th>
                    <td><?= DetailView::widget(['model'=>$model,'attributes' => ['budget.budget_spent'],'template'=>'<tr><td>{value}</td></tr>',]) ?></td>
                  </tr>
                  <tr>
                    <th>Balance :</th>
                    <td><?= DetailView::widget(['model'=>$model,'attributes' => ['budget.balance'],'template'=>'<tr><td>{value}</td></tr>',]) ?></td>
                  </tr>
                    <tr>
                    <th>% Spent Budget :</th>
                    <td>
                    <!-- DONUT CHART -->
                        <div class="box box-danger">
                          <div class="box-header with-border">
                            <h3 class="box-title">Budget Chart</h3>
                            <div class="box-tools pull-right">
                              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                              <canvas id="pieChart" style="height:100px"></canvas>
                          </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </td>
                  </tr>
                </table>
              </div>
            </div><!-- /.col -->
          </div><!-- /.row --> 
                   
          <!-- Table row -->
          <p class="lead"><strong>D:</strong> Partcipant(s) Details:</p>
          <p align="right">
        <?= Html::a('Create Participants', ['participants/create','id'=>$model->id], ['class' => 'btn btn-success'],['id'=>$model->id]) ?>
    </p>
          <div class="row">
            <div class="col-xs-12 table-responsive">
                

              <table class="table table-striped">

                <tbody>
                 <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        'full_name',
                        'gender',
                        'designation',
                        'work_station',
                       // 'status.name',
                     //   ['class' => 'yii\grid\ActionColumn'],
                       ],
                     ]); ?>

                    
                </tbody>
              </table>
                  

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
              <button class="btn btn-success pull-right"><i class="fa fa-paperclip"></i> Attach Document</button>
              <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
            </div>
          </div> 
            </div><!-- /.col -->
          </div><!-- /.row -->

 
        </section><!-- /.content --> 
                                        

</div>
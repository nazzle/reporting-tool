<?php

/* @var $this yii\web\View */
use yii\helpers\Url;

$this->title = 'Configurations';
?>
<div class="site-index">

    <div class="body-content">

            <!-- Application buttons -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Configurations Application</h3>
                </div>
                <div class="box-body">
                  <p><code>Welcome:</code> Configure pre-defined setups required in the system</p>
                  <a class="btn btn-app" href="<?= Url::to(['personnel/index'])?>">
                    <i class="fa fa-users"></i> Personnel
                  </a>
                  <a class="btn btn-app" href="<?= Url::to(['sectors/index'])?>">
                    <i class="fa fa-th-large"></i> Sectors
                  </a>
                  <a class="btn btn-app" href="<?= Url::to(['sponsorship/index'])?>">
                    <i class="fa fa-credit-card"></i> Sponsorship
                  </a>
                  <a class="btn btn-app" href="<?= Url::to(['status/index'])?>">
                    <i class="fa fa-list-ol"></i> Statuses
                  </a>
                  <a class="btn btn-app">
                    <i class="fa fa-usd"></i> Currencies
                  </a>
                  <a class="btn btn-app">
                    <span class="badge bg-yellow">3</span>
                    <i class="fa fa-user"></i> Profile
                  </a>
            
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          

    </div>
</div>

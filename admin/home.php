<h1>Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="bg-light">
<div class="row">
          <div class="col-12 col-sm-6 col-md-3 mx-3">
            <div class="info-box" style="padding: 30px 10px; border-radius: 10px; background-color: #F2D1D1;">
              <span class="info-box-icon bg-light elevation-1" style="width: 30px; height: 30px; padding: 30px;"><i class="fas fa-calendar-day"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="font-weight: 700; text-transform: capitalize; margin-left: 30px; font-size: 1.2rem">Today's Offences</span>
                <span class="info-box-number text-right" style="font-weight: 300; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
                  <?php 
                    $offense = $conn->query("SELECT * FROM `offense_list` where date(date_created) = '".date('Y-m-d')."' ")->num_rows;
                    echo number_format($offense);
                  ?>
                  <?php ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3 mx-3">
            <div class="info-box mb-3"  style="padding: 30px 10px; border-radius: 10px; background-color: #DAEAF1;">
              <span class="info-box-icon bg-info elevation-1" style="width: 30px; height: 30px; padding: 30px;"><i class="fas fa-id-card"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"  style="font-weight: 700; text-transform: capitalize; margin-left: 30px; font-size: 1.2rem">Total Driver's Listed</span>
                <span class="info-box-number text-right" style="font-weight: 300; text-transform: capitalize; font-size: 1.7rem;">
                  <?php 
                    $drivers = $conn->query("SELECT id FROM `drivers_list` ")->num_rows;
                    echo number_format($drivers);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3 mx-3">
            <div class="info-box mb-3"  style="padding: 30px 10px; border-radius: 10px; background-color: #C6DCE4;">
              <span class="info-box-icon bg-lightblue elevation-1" style="width: 30px; height: 30px; padding: 30px;"><i class="fas fa-traffic-light"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"  style="font-weight: 700; text-transform: capitalize; font-size: 1.2rem">Total Traffic Offenses</span>
                <span class="info-box-number text-right" style="font-weight: 300; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
                <?php 
                    $to = $conn->query("SELECT id FROM `offenses` where status = 1 ")->num_rows;
                    echo number_format($to);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
        </div>

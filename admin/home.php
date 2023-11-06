<h1 style="font-size: 1.4rem; margin: 20px;">Welcome, Keren</h1>
<hr class="bg-light">
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box" style="padding: 20px 10px;">
              <span class="info-box-icon elevation-1" style="width: 30px; height: 30px; padding: 30px; background-color: #2BB2FE;color: #fff;"><i class="fas fa-calendar-day"></i></span>
              <div class="info-box-content">
                <span class="info-box-text" style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem">Today's Offences</span>
                <span class="info-box-number" style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"  style="padding: 23px 10px;">
              <span class="info-box-icon elevation-1" style="width: 30px; height: 30px; padding: 30px; background-color: #1D1F2C; color: #fff;"><i class="fas fa-id-card"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"  style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem">Total Drivers</span>
                <span class="info-box-number" style="font-weight: 500; text-transform: capitalize; font-size: 1.5rem;">
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

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"  style="padding: 20px 10px;">
              <span class="info-box-icon elevation-1" style="width: 30px; height: 30px; padding: 30px; background-color: #3250FF; color: #fff;"><i class="fas fa-traffic-light"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"  style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem">Total Offenses</span>
                <span class="info-box-number" style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3"  style="padding: 20px 10px;">
              <span class="info-box-icon  elevation-1" style="width: 30px; height: 30px; padding: 30px; background-color: #883DCF;color: #fff;"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"  style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem; ">Total Users</span>
                <span class="info-box-number" style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
                <?php 
                    $to = $conn->query("SELECT id FROM `users`")->num_rows;
                    echo number_format($to);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

        </div>

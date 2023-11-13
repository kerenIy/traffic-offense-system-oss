<h1 style="font-size: 1.4rem; margin: 20px;">Welcome, Keren</h1>
<hr class="bg-light">
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box" style="padding: 20px 10px;">
      <span class="info-box-icon elevation-1"
        style="width: 30px; height: 30px; padding: 30px; background-color: #2BB2FE;color: #fff;"><i
          class="fas fa-calendar-day"></i></span>
      <div class="info-box-content">
        <span class="info-box-text" style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem">Today's
          Offences</span>
        <span class="info-box-number"
          style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
          <?php
          $offense = $conn->query("SELECT * FROM `offense_list` where date(date_created) = '" . date('Y-m-d') . "' ")->num_rows;
          echo number_format($offense);
          ?>
          <?php ?>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box" style="padding: 20px 10px;">
      <span class="info-box-icon elevation-1"
        style="width: 30px; height: 30px; padding: 30px; background-color: #1D1F2C; color: #fff;"><i
          class="fas fa-id-card"></i></span>
      <div class="info-box-content">
        <span class="info-box-text" style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem">Total
          Drivers</span>
        <span class="info-box-number"
          style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
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
    <div class="info-box mb-3" style="padding: 20px 10px;">
      <span class="info-box-icon elevation-1"
        style="width: 30px; height: 30px; padding: 30px; background-color: #3250FF; color: #fff;"><i
          class="fas fa-traffic-light"></i></span>

      <div class="info-box-content">
        <span class="info-box-text" style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem">Total
          Offenses</span>
        <span class="info-box-number"
          style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
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
    <div class="info-box mb-3" style="padding: 20px 10px;">
      <span class="info-box-icon  elevation-1"
        style="width: 30px; height: 30px; padding: 30px; background-color: #883DCF;color: #fff;"><i
          class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text" style="font-weight: 300; text-transform: capitalize; font-size: 1.2rem; ">Total
          Users</span>
        <span class="info-box-number"
          style="font-weight: 500; text-transform: capitalize; margin-left: 30px; font-size: 1.7rem;">
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

<div class="mt-3">
  <?php if ($_settings->chk_flashdata('success')): ?>
    <script>
      alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
    </script>
  <?php endif; ?>
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">List of Offense Records</h3>
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="container-fluid">
          <table class="table table-hover table-stripped">
            <colgroup>
              <col width="5%">
              <col width="15%">
              <col width="15%">
              <col width="25%">
              <col width="25%">
              <col width="10%">
              <col width="5%">
            </colgroup>
            <thead>
              <tr>
                <th>#</th>
                <th>DateTime</th>
                <th>Ticket No.</th>
                <th>License ID</th>
                <th>Officer</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              $qry = $conn->query("SELECT r.*,d.license_id_no FROM `offense_list` r inner join `drivers_list` d on r.driver_id = d.id order by unix_timestamp(r.date_created) desc ");
              while ($row = $qry->fetch_assoc()):
                ?>
                <tr>
                  <td class="text-center">
                    <?php echo $i++; ?>
                  </td>
                  <td>
                    <?php echo date("Y-m-d H:i A", strtotime($row['date_created'])) ?>
                  </td>
                  <td><a href="javascript:void(0)" class="view_details" data-id="<?php echo $row['id'] ?>">
                      <?php echo $row['ticket_no'] ?>
                    </a></td>
                  <td>
                    <?php echo $row['license_id_no'] ?>
                  </td>
                  <td>
                    <?php echo $row['officer_name'] ?>
                  </td>
                  <td class="text-center">
                    <?php if ($row['status'] == 1): ?>
                      <span class="badge badge-success">Paid</span>
                    <?php else: ?>
                      <span class="badge badge-secondary">Pending</span>
                    <?php endif; ?>
                  </td>
                  <td align="center">
                    <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle dropdown-icon"
                      data-toggle="dropdown">
                      Action
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a class="dropdown-item" href="?page=offenses/manage_record&id=<?php echo $row['id'] ?>"><span
                          class="fa fa-edit text-primary"></span> Edit</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item delete_data" href="javascript:void(0)"
                        data-id="<?php echo $row['id'] ?>"><span class="fa fa-trash text-danger"></span> Delete</a>
                    </div>
                  </td>
                </tr>
              <?php endwhile; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function () {
      $('.delete_data').click(function () {
        _conf("Are you sure to delete this offense record permanently?", "delete_offense", [$(this).attr('data-id')])
      })
      $('.view_details').click(function () {
        uni_modal("<i class='fa fa-ticket'></i> Driver's Offense Ticket Details", "offenses/view_details.php?id=" + $(this).attr('data-id'), 'mid-large')
      })
      $('.table').dataTable({
        columnDefs: [{ orderable: false, targets: [5, 6] }]
      });
    })
    function delete_offense($id) {
      start_loader();
      $.ajax({
        url: _base_url_ + "classes/Master.php?f=delete_offense_record",
        method: "POST",
        data: { id: $id },
        dataType: "json",
        error: err => {
          console.log(err)
          alert_toast("An error occured.", 'error');
          end_loader();
        },
        success: function (resp) {
          if (typeof resp == 'object' && resp.status == 'success') {
            location.reload();
          } else {
            alert_toast("An error occured.", 'error');
            end_loader();
          }
        }
      })
    }
  </script>
</div>
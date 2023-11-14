<?php require_once('./config.php'); ?>
<!DOCTYPE HTML>

<head>
  <title> Make Payments |
    <?php echo $_settings->info('short_name') ?>
  </title>
  <meta name="description" content="Sample Meta-description content">
  <meta name="keywords" content="Blog 1, Sample Blog, Sample Article, Sample 101">
  <meta name="robots" content="index, follow">
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Sample Post" />
  <meta property="og:description" content="Sample Meta-description content" />
  <meta property="og:image" content="http://localhost/charity/uploads/blog_uploads/banners/4_banner.jpg" />
  <meta property="og:url" content="http://localhost/charity/pages/sample_post.php" />
  <?php require_once('./inc/header.php') ?>
</head>

<!-- <body class="bg-dark py-5 d-flex align-items-center">
  <!-- <form action="" id="payment-form">
    <div class="form-group">
      <label for="control-label" for="offense_id">Enter traffic offense id</label>
      <input type="text" class="form-control" placeholder="Enter ID" />
    </div>
    <div class="form-group">
      <button class="btn btn-flat btn-primary" form="ayment-form">Search</button>
    </div>
  </form> -->
  <body class="bg-dark py-5 d-flex justify-content-center container-fluid align-items-center w-full">

<div class="card card-outline card-info w-50 p-5">
  <div>
    <h4 class="text-blue">Make Payments</h4>
  </div>
  <form action="" id="report-offense-form">
    <div class="row">
      <div class="col-6">
      <div class="form-group">
      <label for="control-label" for="offense_id">Enter traffic offense id</label>
      <input type="text" class="form-control" placeholder="Enter ID" />
    </div>
        <div class="form-group">
          <label for="control-label" for="reporter_name">Offender Name</label>
          <input type="text" name="control-label" class="form-control" id="reporter_name" placeholder="Enter reporter name" required />
        </div>
        <div class="form-group">
          <label for="control-label" for="reporter_phone">Offender Phone</label>
          <input type="text" class="form-control" id="reporter_phone" placeholder="Enter reporter phone" required />
        </div>
        <div class="form-group">
          <label class="control-label" for="status">Status</label>
          <select name="status" id="status" class="custom-select" required>
            <option value="0" <?php echo (isset($status) && $status == '0') ? 'selected' : '' ?>>Pending</option>
            <option value="1" <?php echo (isset($status) && $status == '1') ? 'selected' : '' ?>>Paid</option>
          </select>
        </div>
      </div>

      <div class="col-6">
        <div class="form-group">
          <lable class="control-label" for="date_created">Date Violated</lable>
          <input type="datetime-local" class="form-control" name="date_created" id="date_created"
            value="<?php echo isset($date_created) ? date("Y-m-d\\TH:i", strtotime($date_created)) : date("Y-m-d\\TH:i") ?>"
            required>
        </div>
        <div class="form-group">
          <lable class="control-label" for="date_created">Due Date</lable>
          <input type="datetime-local" class="form-control" name="due_date" id="due_date"
            value="<?php echo isset($due_date) ? date("Y-m-d\\TH:i", strtotime($due_date)) : date("Y-m-d\\TH:i") ?>"
            required>
        </div>
        <div class="form-group">
          <label class="control-label" for="ticket_no">Ticket No.</label>
          <input type="text" class="form-control" name="ticket_no" id="ticket_no"
            value="<?php echo isset($ticket_no) ? $ticket_no : '' ?>" required>
        </div>
        <div class="form-group">
          <lable class="control-label" for="driver_id">Driver</lable>
          <select name="driver_id" id="driver_id" class="custom-select select2" required>
            <option value=""></option>
            <?php
            $driver = $conn->query("SELECT * FROM `drivers_list` order by `name` asc ");
            while ($row = $driver->fetch_assoc()):
              ?>
              <option value="<?php echo $row['id'] ?>" <?php echo (isset($driver_id) && $driver_id == $row['id']) ? 'selected' : '' ?>>[
                <?php echo $row['license_id_no'] ?>]
                <?php echo ucwords($row['name']) ?>
              </option>
            <?php endwhile; ?>
          </select>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button class="btn btn-flat btn-primary" form="report-offense">Search</button>
    </div>
  </form>
</div>

<script>
  $('#report-offense-form').submit(function (e) {
    e.preventDefault()
    var _this = $(this)
    $('.err-msg').remove()
    start_loader();
    if ($('[name="offense_id[]"]').length <= 0) {
      alert_toast('Please add atleast 1 offense item first', 'warning')
      end_loader();
      return false;
    }
  })
</script>

</body>
  <script>
    $('#payment-form').submit(function (e) {
      e.preventDefault()
      var _this = $(this)
      $('.err-msg').remove()
    })
  </script>

</body>
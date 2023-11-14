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



<body class="bg-dark py-5 d-flex justify-content-center container-fluid align-items-center w-full">

  <div class="card card-outline card-info w-50 p-5">
    <div>
      <h4 class="text-blue">Make Payments</h4>
    </div>
    <form action="" id="make-payment-form">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="control-label" for="offense_id">Enter traffic offense id</label>
            <input type="text" class="form-control" id="offense_id" placeholder="Enter ID" />
          </div>
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-flat btn-primary" form="report-offense">Search</button>
      </div>
    </form>
  </div>

  <script>
    $('#make-payment-form').submit(function (e) {
      e.preventDefault()
      var _this = $(this)
      $('.err-msg').remove()
      start_loader();
      if ($('[name="offense_id"]').length <= 0) {
        alert_toast('Please enter offense id', 'warning')
        end_loader();
        return false;
      }
    })
  </script>

</body>

</body>
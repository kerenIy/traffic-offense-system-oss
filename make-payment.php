<?php require_once('./config.php'); ?>
<!DOCTYPE HTML>

<head>
  <title> Report offense |
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

<body class="bg-dark py-5 d-flex align-items-center">
  <form action="" id="payment-form">
    <div class="form-group">
      <label for="control-label" for="offense_id">Enter traffic offense id</label>
      <input type="text" class="form-control" placeholder="Enter ID" />
    </div>
    <div class="form-group">
      <button class="btn btn-flat btn-primary" form="ayment-form">Search</button>
    </div>
  </form>

  <script>
    $('#payment-form').submit(function (e) {
      e.preventDefault()
      var _this = $(this)
      $('.err-msg').remove()
    })
  </script>

</body>
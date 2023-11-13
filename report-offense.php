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
  <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.css">
  <link rel="stylesheet" href="<?php echo base_url ?>dist/css/custom.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
      from {
        opacity: .99
      }

      to {
        opacity: 1
      }
    }

    .chartjs-render-monitor {
      animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
      position: absolute;
      direction: ltr;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      overflow: hidden;
      pointer-events: none;
      visibility: hidden;
      z-index: -1
    }

    .chartjs-size-monitor-expand>div {
      position: absolute;
      width: 1000000px;
      height: 1000000px;
      left: 0;
      top: 0
    }

    .chartjs-size-monitor-shrink>div {
      position: absolute;
      width: 200%;
      height: 200%;
      left: 0;
      top: 0
    }
  </style>

  <!-- jQuery -->
  <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
  <script>
    var _base_url_ = '<?php echo base_url ?>';
  </script>
  <script src="<?php echo base_url ?>dist/js/script.js"></script>

</head>



<body class="bg-dark py-5 d-flex justify-content-center container-fluid align-items-center w-full">

  <div class="card card-outline card-info w-50 p-5">
    <div>
      <h4 class="text-blue">Report a traffic offense</h4>
    </div>
    <form action="" id="report-offense-form">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="control-label" for="reporter_name">Reporter Name</label>
            <input type="text" class="form-control" id="reporter_name" placeholder="Enter reporter name" required />
          </div>
          <div class="form-group">
            <label for="control-label" for="reporter_phone">Reporter Phone</label>
            <input type="text" class="form-control" id="reporter_phone" placeholder="Enter reporter phone" required />
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
            <label class="control-label" for="driver_name">Driver name</label>
            <input type="text" class="form-control" id="driver_name" placeholder="Enter driver_name" required />
          </div>
        </div>
      </div>

      <div class="form-group">
        <button class="btn btn-flat btn-primary" form="report-offense">Report </button>
      </div>
    </form>
  </div>

  <script>
    $('#report-offense-form').submit(function (e) {
      e.preventDefault()
      var _this = $(this)
      $('.err-msg').remove()
      start_loader();
      if ($('[name="offense_name"]').length <= 0) {
        alert_toast('Please enter your name', 'warning')
        end_loader();
        return false;
      }


      $.ajax({
        url: _base_url_ + "classes/Master.php?f=save_public_offense_record",
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        dataType: 'json',
        error: err => {
          console.log(err)
          alert_toast("An error occured", 'error');
          end_loader();
        },
        success: function (resp) {
          if (typeof resp == 'object' && resp.status == 'success') {
            end_loader();
            uni_modal("<i class='fa fa-ticket'></i> Driver's Offense Ticket Details", "offenses/view_details.php?id=" + resp.id, 'mid-large')
            setTimeout(() => {
              end_loader();
            }, 500);
            $('#uni_modal').on('hide.bs.modal', function (e) {
              location.href = "report-offense.php";
            })
          } else if (resp.status == 'failed' && !!resp.msg) {
            var el = $('<div>')
            el.addClass("alert alert-danger err-msg").text(resp.msg)
            _this.prepend(el)
            el.show('slow')
            $("html, body").animate({ scrollTop: _this.closest('.card').offset().top }, "fast");
            end_loader()
          } else {
            alert_toast("An error occured", 'error');
            end_loader();
            console.log(resp)
          }
        }
      })
    })
  </script>

</body>
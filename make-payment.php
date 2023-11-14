<?php require_once('./config.php'); ?>


<!DOCTYPE HTML>

<html>

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
    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" id="make-payment-form">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="control-label" for="offense_id">Enter traffic offense id</label>
            <input type="text" class="form-control" name="offense_id" id="offense_id" placeholder="Enter ID" />
          </div>
          <div class="form-group">
            <input type="hidden" name="public_key" value="FLWPUBK_TEST-eb4c7c086ab0f56b2367f9c407ab303e-X" />
            <input type="hidden" class="form-control" name="customer[name]" value="Keren" />
            <input type="hidden" class="form-control" name="customer[email]" value="keren@gmail.com" />
            <input type="hidden" name="tx_ref" value="txref-81123" />
            <input type="hidden" name="amount" value="20000" />
            <input type="hidden" name="currency" value="NGN" />
            <input type="hidden" name="meta[source]" value="docs-html-test" />
          </div>
        </div>
      </div>
      <div class="form-group">
        <button class="btn btn-flat btn-primary" form="make-payment-form">Search</button>
      </div>
    </form>
  </div>
  <!--
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
      $.ajax({
        url: _base_url_ + "classes/Master.php?f=pay",
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
              location.href = "./?page=offenses";
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
  -->
</body>

</html>
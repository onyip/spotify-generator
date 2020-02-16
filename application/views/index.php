<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/favicon.png">
  <title>
    Integral Spotify Generator
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?=base_url()?>assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?=base_url()?>assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url()?>assets/demo/demo.css" rel="stylesheet" />


  <!--   Core JS Files   -->
  <script src="<?=base_url()?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url()?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="<?=base_url()?>assets/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?=base_url()?>assets/js/plugins/moment.min.js"></script>
  <script src="<?=base_url()?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?=base_url()?>assets/demo/demo.js"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url()?>assets/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      blackKit.initDatePicker();
      blackKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</head>
<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
          <span>INT</span> Spotiify Generator
        </a>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                INT•
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header header-filter">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="content-center brand">
          <h1 class="h1-seo">INT•</h1>
          <h3>Spotify Acount Generator</h3>
        </div>
      </div>
    </div>
    <div class="main">
      <img src="assets/img/path1.png" class="path">
      <div class="section section-basic" id="basic-elements">
        <div class="container">
          <?php if (@$result): ?>
            <div class="tab-content tab-subcategories">
              <div class="tab-pane active">
                <div class="table-responsive">
                  <table class="table tablesorter table-bordered">
                    <thead>
                      <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Acount/Password</th>
                        <th class="text-center">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1; foreach ($result as $v): ?>
                      <tr>
                        <td class="text-center"><?=$i++?></td>
                        <td><?=$v['email']?></td>
                        <td class="text-center">
                          <?php if ($v['status'] == 1): ?>
                            <span class="badge badge-success">Success</span>
                            <?php else: ?>
                              <span class="badge badge-danger">Failed</span>
                            <?php endif ?>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <br><br>
          <?php endif ?>
          <div id="inputs">
            <form action="<?=site_url()?>/spotify/generate" method="post" autocomplete="off">
              <h3>Setup Generator</h3>
              <p>User</p>
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="form-group">
                    <input required type="text" name="user" value="" class="form-control" placeholder="User" />
                  </div>
                </div>
                <h3 class="desktop">@</h3>
                <div class="col-sm-6 col-lg-3">
                  <div class="form-group">
                    <input required type="text" name="dns" value="" class="form-control" placeholder="DNS" />
                  </div>
                </div>
              </div><br>

              <p>Domain</p>
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input required class="form-check-input" id="dom1" type="radio" name="domain" value="com">
                      <span class="form-check-sign"></span>
                      .com
                    </label>
                  </div>

                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input required class="form-check-input" id="dom2" type="radio" name="domain" value="co">
                      <span class="form-check-sign"></span>
                      .co
                    </label>
                  </div>

                  <div class="form-check form-check-radio">
                    <label class="form-check-label">
                      <input required class="form-check-input" id="dom3" type="radio" name="domain" value="id">
                      <span class="form-check-sign"></span>
                      .id
                    </label>
                  </div>
                </div>
              </div><br>

              <p>Password</p>
              <div class="row mt-3">
                <div class="col-sm-6 col-lg-3">
                  <div class="form-group">
                    <input required type="Password" name="password" value="" class="form-control" placeholder="Password" minlength="6"/>
                  <i class="text-primary">Min length is 6.</i><br>
                  </div>
                </div>  
              </div><br>
              <p>Amount</p>
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="form-group">
                    <input required type="number" name="jumlah" value="" class="form-control" placeholder="Amount" maxlength="2"/>
                  </div>
                  <i class="text-primary">Max amount is 99.</i><br>
                  <i class="text-info">*/if you want more, you must sigin/*</i>
                </div>  
              </div>
              <br>
              <div class="form-check text-left">
                <label class="form-check-label">
                  <input required class="form-check-input" type="checkbox">
                  <span class="form-check-sign"></span>
                  I agree to the
                  <a href="#">terms and conditions</a>.
                </label>
              </div><br>
              <div id="submit">
                <button type="submit" class="btn btn-primary">Generate</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container text-center">
     <span>copyright &copy; INT• Group. All Rights Reserved</span>
   </div>
 </footer>
</div>
</body>
</html>
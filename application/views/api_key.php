<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLBTW News:Home</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <!-- google fonts  -->
    <link href='<?php echo base_url() ?>assets/css/font-arvo.css' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url() ?>assets/css/font-allerta.css" rel="stylesheet" type="text/css">
     <!-- slick slider css file -->
    <link href="<?php echo base_url() ?>assets/css/slick.css" rel="stylesheet">
    <!-- <link href="css/theme-red.css" rel="stylesheet">    -->
    <link href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet">
    <!-- main site css file -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <script type="text/javascript">
          window.onload = function () {
              $('#api_key_modal').modal('show');
          }
        </script>

        <script type="text/javascript">
            function BackToHomePage() {
                window.location.replace("<?php echo base_url(); ?>");
            }
        </script>
    </head>

    <body>
      <!-- =========================
        //////////////This Theme Design and Developed //////////////////////
        //////////// by www.wpfreeware.com======================-->

      <!-- Preloader -->
      <div id="preloader">
        <div id="status">&nbsp;</div>
      </div>
      <!-- End Preloader -->

      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
      <!-- start header -->
      <header id="header">
        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="index.html"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo"></a>

            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li class="active"><a href="index.html">Home</a></li>
                <!-- <li class=""><a href="" data-toggle="modal" data-target="#SignUpModal">Login</a></li> -->
                <!-- <li><a href="#">Technology</a></li> -->
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Android</a></li>
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Nokia</a></li>
                    <li><a href="#">Walton Mobile</a></li>
                    <li><a href="#">Sympony</a></li>
                  </ul>
                </li> -->
                <!-- <li><a href="#">Laptops</a></li> -->
                <!-- <li><a href="#">Tablets</a></li> -->
                <!-- <li><a href="contact.html">Contact Us</a></li> -->
                <!-- <li><a href="404.html">404 Page</a></li> -->
              </ul>
            </div><!--/.nav-collapse -->
            <div class="search">
                <a class="signup_icon" href="" data-toggle="modal" data-target="#SignUpModal"><i class="fa fa-user"></i></a>
                <a class="search_icon" href="#"><i class="fa fa-search"></i></a>
                <form action="">
                  <input class="search_bar" type="text" placeholder="Search here">
                </form>
              </div>
          </div>
        </nav>
      </header>
      <!-- End header -->
      <!-- start content section -->
      <section id="content">
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <div id="api_key_modal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                      <!-- <div class="col-md-6 col-md-offset-3"> -->
                        <div class="modal-content">
                          <div class="modal-header">
                            <a href="<?php echo base_url().'index.php' ?>"><button type="button" class="close" data-dismiss="modal" aria-label="Close"></a>
                              <span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">User API KEY Data</h4>
                          </div>
                          <div class="modal-body">
                            <p>Please Note Below Data Carefully</p>
                            <p>Username : <?php echo $username ?></p>
                            <p style="word-wrap: break-word">API KEY : <?php echo $api_key ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="BackToHomePage();">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                          </div>
                        </div>
                      <!-- </div> -->
                  </div>
              </div>
          </div>
          <!-- /.content-wrapper -->
      </section><!-- End content section -->
      <!-- start footer area -->
      <footer id="footer">
        <div class="footer_top">
          <div class="container">
            <!-- <div class="row"> -->
              <!-- <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInLeftBig">
                  <h2>Labels</h2>
                  <ul class="labels_nav">
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Business</a></li>
                    <li><a href="#">Slider</a></li>
                    <li><a href="#">Life & Style</a></li>
                    <li><a href="#">Ver</a></li>
                    <li><a href="#">Sports</a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget">
                  <h2>Popular Post</h2>
                  <ul class="ppost_nav wow fadeInLeftBig">
                    <li>
                      <div class="media">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="<?php echo base_url() ?>assets/img/70x70.jpg">
                        </a>
                        <div class="media-body">
                          <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="<?php echo base_url() ?>assets/img/70x70.jpg">
                        </a>
                        <div class="media-body">
                          <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a href="single_page.html" class="media-left">
                          <img alt="img" src="<?php echo base_url() ?>assets/img/70x70.jpg">
                        </a>
                        <div class="media-body">
                          <a href="#" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInRightBig">
                  <h2>Flickr Images</h2>
                </div>
              </div> -->
              <!-- <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInRightBig">
                  <h2>Jetpack Subscription Widget</h2>
                  <form class="subscribe_form">
                    <p id="subscribe-text">We promise, we will only send you awesome stuff which will make your day!</p>
                    <p id="subscribe-email">
                      <input type="text" placeholder="Email Address" name="email">
                    </p>
                    <p id="subscribe-submit">
                      <input type="submit" value="Submit">
                    </p>
                  </form>
                </div>
              </div> -->
            <!-- </div> -->
          </div>
        </div>
        <div class="footer_bottom">
          <div class="container">
            <p class="copyright">All rights reserved <a href="index.html">Cybar Tech</a></p>
            <p class="developer">Developed By <a href="http://www.wpfreeware.com/" rel="nofollow">Wpfreeware</a></p>
          </div>
        </div>
      </footer>
      <!-- End footer area -->


      <!-- jQuery google CDN Library -->
      <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
      <!-- For content animatin  -->
      <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
      <!-- bootstrap js file -->
      <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
      <!-- slick slider js file -->
      <script src="<?php echo base_url() ?>assets/js/slick.min.js"></script>

        <!-- custom js file include -->
      <script src="<?php echo base_url() ?>assets/js/custom.js"></script>

      <!-- =========================
            //////////////This Theme Design and Developed //////////////////////
            //////////// by www.wpfreeware.com======================-->


    </body>
</html>

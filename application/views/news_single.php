<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLBTW News:<?php echo $data['title'] ?></title>

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
  </head>
<body>
    <!-- Modal -->
    <div id="SignUpModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Join Us and Get Your API KEY</h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url()?>index.php/user/insert" method="post">
                <div class="box-body">
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-8">
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>
              </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <!-- <button type="reset" class="btn btn-default">Cancel</button> -->
                  <button type="submit" value="submit" class="btn btn-success" >Sign Up</button>
                  <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                </div>
                <!-- /.box-footer -->
            </form>
          </div>
        </div>

      </div>
    </div>
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

          <a class="navbar-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="logo"></a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
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
    <div class="container">
      <!-- start top add place  -->
      <!-- <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="topadd_bar">
            <a href="#"><img src="img/addbanner_728x90_V1.jpg" alt="img"></a>
          </div>
        </div>
      </div> -->
      <!-- End top add place  -->
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-4">
          <div class="left_sidebar">
            <!-- start single widget -->
            <div class="single_widget">
              <h2>Post of the month</h2>
              <ul class="post_nav">
                  <?php if(isset($month)){ ?>
                  <?php if(count($month) > 20){ ?>
                  <?php $length = 20; ?>
                  <?php }else{ ?>
                  <?php $length = count($month); ?>
                  <?php } ?>
                  <?php if(isset($month)){ ?>
                      <?php for($i = 0; $i < $length; $i++) { ?>
                          <li>
                            <figure class="effect-lily">
                              <a href="<?php echo base_url().'index.php/news_single/index/'.$month[$i]->id_news  ?>"><img src="<?php echo $month[$i]->image ?>" alt="img" height="185" width="150"></a>
                              <figcaption>
                                <a href="<?php echo base_url().'index.php/news_single/index/'.$month[$i]->id_news  ?>"><?php echo $month[$i]->title ?></a>
                              </figcaption>
                            </figure>
                          </li>
                      <?php } ?>
                  <?php } ?>
                  <?php } ?>
              </ul>
            </div><!-- End single widget -->
            <!-- start single widget -->
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-8">
          <div class="middle_content">
            <ol class="breadcrumb">
              <!-- <li><a href="index.html">Home</a></li>
              <li><a href="#">Technology</a></li>
              <li class="active">Mobile</li> -->
            </ol>
            <div class="single_page_area">
              <h1><?php echo $data['title'] ?></h1>
              <div class="post_commentbox">
                <!-- <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> -->
                <span><i class="fa fa-calendar"></i><?php echo date_format(date_create($data['date']), 'd F Y') ?></span>
                <span><i class="fa fa-tags"></i><?php echo $data['category'] ?></span>
                <span><i class="fa fa-tags"></i><?php echo $data['sub_category'] ?></a></span>
              </div>
              <div class="single_content">
                  <?php if (isset($data['image'])) { ?>
                      <img src="<?php echo $data['image'] ?>" alt="news_image" width="622">
                  <?php } ?>

                  <p>
                      <?php echo nl2br($data['content']) ?>
                  </p>
                <!-- <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
                <blockquote>Donec volutpat nibh sit amet libero ornare non laoreet arcu luctus. Donec id arcu quis mauris euismod placerat sit amet ut metus. Sed imperdiet fringilla sem eget euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque adipiscing, neque ut pulvinar tincidunt, est sem euismod odio, eu ullamcorper turpis nisl sit amet velit. Nullam vitae nibh odio, non scelerisque nibh. Vestibulum ut est augue, in varius purus.</blockquote>
                <p> Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
                <ul>
                  <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                  <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                  <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                  <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                  <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                  <li>Nullam vitae nibh odio, non scelerisque nibh</li>
                </ul>
                 <p> Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat vehicula, lacus justo semper libero, quis porttitor turpis odio sit amet ligula. Duis dapibus fermentum orci, nec malesuada libero vehicula ut. Integer sodales, urna eget interdum eleifend, nulla nibh laoreet nisl, quis dignissim mauris dolor eget mi. Donec at mauris enim. Duis nisi tellus, adipiscing a convallis quis, tristique vitae risus. Nullam molestie gravida lobortis. Proin ut nibh quis felis auctor ornare. Cras ultricies, nibh at mollis faucibus, justo eros porttitor mi, quis auctor lectus arcu sit amet nunc. Vivamus gravida vehicula arcu, vitae vulputate augue lacinia faucibus.</p>
                <h1>This is h1 content </h1>
                <h2>This is h2 content </h2>
                <h3>This is h3 content </h3>
                <h4>This is h4 content </h4>
                <h5>This is h5 content </h5>
                <h6>This is h6 content </h6>
                <button class="btn default-btn">Default</button>
                <button class="btn btn-red">Red Button</button>
                <button class="btn btn-yellow">Yellow Button</button>
                <button class="btn btn-green">Green Button</button>
                <button class="btn btn-black">Black Button</button>
                <button class="btn btn-orange">Orange Button</button>
                <button class="btn btn-blue">Blue Button</button>
                <button class="btn btn-lime">Lime Button</button> -->
              </div>

            </div>

          </div>
          <!-- <div class="social_link">
            <ul class="social_nav">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div> -->
          <div class="related_post">
            <!-- <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2> -->
            <ul class="ppost_nav wow fadeInDown">
                <!-- <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/70x70.jpg">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/70x70.jpg">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/70x70.jpg">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/70x70.jpg">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/70x70.jpg">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="single_page.html" class="media-left">
                      <img alt="img" src="img/70x70.jpg">
                    </a>
                    <div class="media-body">
                      <a href="single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius</a>
                    </div>
                  </div>
                </li> -->
              </ul>
          </div>
        </div>
         <!-- start post pagination -->
        <nav class="nav-growpop">
          <!-- <a class="prev" href="#">
            <span class="icon-wrap"><i class="fa fa-angle-left"></i></span>
            <div>
              <span>Previous Story</span>
              <h3>Child full of grace saviour of the human race</h3>
              <img src="http://lorempixel.com/100/100/" alt="Previous thumb"/>
            </div>
          </a> -->
          <!-- <a class="next" href="#">
            <span class="icon-wrap"><i class="fa fa-angle-right"></i></svg></span>
            <div>
              <span>Next Story</span>
              <h3>Ancient rulage of grains and the trees of the night</h3>
              <img src="http://lorempixel.com/100/100/" alt="Next thumb"/>
            </div>
          </a> -->
        </nav>
        <!-- End post pagination -->
        <div class="col-lg-3 col-md-3 col-sm-12">
          <div class="right_sidebar">
            <!-- start single widget -->
            <!-- start single widget -->
            <!-- start single widget -->
            <div class="single_widget">
             <h2>Categories</h2>
             <ul>
                 <?php if (isset($category)): ?>
                     <?php foreach ($category as $cat): ?>
                         <li class="cat-item"><a href="<?php echo base_url().'index.php/news/index/'.$cat->category?>"><?php echo $cat->category ?></a></li>
                     <?php endforeach; ?>
                 <?php endif; ?>
             </ul>
            </div><!-- End single widget -->
             <!-- start single widget -->
             <!-- start single widget -->
          </div>
        </div>
      </div>
    </div>
  </section><!-- End content section -->
  <!-- start footer area -->
  <footer id="footer">
    <div class="footer_top">
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

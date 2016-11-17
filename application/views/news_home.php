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
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
    				<!-- start featured slider -->
    				<div class="featured_slider">
    				   <!-- Set up your HTML -->
    				   <h2 class="featured_title">On Featured</h2>
    				  <div class="slick_slider">
                          <?php foreach ($data as $news) { ?>
                                <div class="single_iteam">
              					  <img src="<?php echo $news->image ?>" alt="img" height="300" width="250">
              					  <h2><a class="slider_tittle" href="#"><?php echo $news->title  ?></a></h2>
              					</div>
                          <?php } ?>

    					<!-- <div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x2.jpg" alt="img">
    					  <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div>
    					<div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x3.jpg" alt="img">
    					   <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div>
    					<div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x4.jpg" alt="img">
    					   <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div>

    					<div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x5.jpg" alt="img">
    					  <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div>
    					<div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x6.jpg" alt="img">
    					  <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div>
    					<div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x3.jpg" alt="img">
    					   <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div>
    					<div class="single_iteam">
    					  <img src="<?php echo base_url() ?>assets/img/300x250x5.jpg" alt="img">
    					   <h2><a class="slider_tittle" href="#">Fusce eu nulla semper porttitor felis sit amet</a></h2>
    					</div> -->
    				  </div>
    				</div><!-- End featured slider -->
            </div>
          </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">
              <div class="left_sidebar">
                <!-- start single widget -->
                <div class="single_widget">
                  <h2>Post of the month</h2>
                  <ul class="post_nav">
                    <li>
                      <figure class="effect-lily">
                        <a href="single_page.html"><img src="<?php echo base_url() ?>assets/img/270x150x4.jpg" alt="img"></a>
                        <figcaption>
                          <a href="single_page.html">It’s Now An Android World- Feel The Power</a>
                        </figcaption>
                      </figure>
                    </li>
                    <li>
                      <figure class="effect-lily">
                        <a href="single_page.html"><img src="<?php echo base_url() ?>assets/img/270x150x4.jpg" alt="img"></a>
                        <figcaption>
                          <a href="single_page.html">It’s Now An Android World- Feel The Power</a>
                        </figcaption>
                      </figure>
                    </li>
                    <li>
                      <figure class="effect-lily">
                        <a href="single_page.html"><img src="<?php echo base_url() ?>assets/img/270x150x4.jpg" alt="img"></a>
                        <figcaption>
                          <a href="single_page.html">It’s Now An Android World- Feel The Power</a>
                        </figcaption>
                      </figure>
                    </li>
                    <li>
                      <figure class="effect-lily">
                        <a href="single_page.html"><img src="<?php echo base_url() ?>assets/img/270x150x4.jpg" alt="img"></a>
                        <figcaption>
                          <a href="single_page.html">It’s Now An Android World- Feel The Power</a>
                        </figcaption>
                      </figure>
                    </li>
                    <li>
                      <figure class="effect-lily">
                        <a href="single_page.html"><img src="<?php echo base_url() ?>assets/img/270x150x4.jpg" alt="img"></a>
                        <figcaption>
                          <a href="single_page.html">It’s Now An Android World- Feel The Power</a>
                        </figcaption>
                      </figure>
                    </li>
                    <li>
                      <figure class="effect-lily">
                        <a href="single_page.html"><img src="<?php echo base_url() ?>assets/img/270x150x4.jpg" alt="img"></a>
                        <figcaption>
                          <a href="single_page.html">It’s Now An Android World- Feel The Power</a>
                        </figcaption>
                      </figure>
                    </li>
                  </ul>
                </div><!-- End single widget -->
                <!-- start single widget -->
                <div class="single_widget">
                  <h2>Popular Post</h2>
                  <ul class="ppost_nav wow fadeInDown">
                    <li>
                      <div class="media">
                        <a class="media-left" href="single_page.html">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                     <li>
                      <div class="media">
                        <a class="media-left" href="single_page.html">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="single_page.html">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                     <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>

                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div><!-- End single widget -->
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8">
              <div class="middle_content">
                <h2>What’s Hot</h2>

                <!-- start featured post -->
                <ul class="featured_nav">
                  <li class="wow fadeInDown">
                    <figure class="featured_img">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/550x400.jpg" alt="img"></a>
                    </figure>
                    <article class="featured_article">
                      <div class="article_category">
                        <a href="#">Technology <i class="fa fa-angle-right"></i></a>
                        <a href="#">Mobile  <i class="fa fa-angle-right"></i></a>
                        <a href="#">Samsung</a>
                      </div>
                      <h2 class="article_titile"><a href="single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
                    </article>
                  </li>
                  <li class="wow fadeInDown">
                    <figure class="featured_img">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/550x400.jpg" alt="img"></a>
                    </figure>
                    <article class="featured_article">
                      <div class="article_category">
                        <a href="#">Technology <i class="fa fa-angle-right"></i></a>
                        <a href="#">Mobile  <i class="fa fa-angle-right"></i></a>
                        <a href="#">Samsung</a>
                      </div>
                      <h2 class="article_titile"><a href="single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
                    </article>
                  </li>
                  <li class="wow fadeInDown">
                    <figure class="featured_img">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/550x400.jpg" alt="img"></a>
                    </figure>
                    <article class="featured_article">
                      <div class="article_category">
                        <a href="#">Technology <i class="fa fa-angle-right"></i></a>
                        <a href="#">Mobile  <i class="fa fa-angle-right"></i></a>
                        <a href="#">Samsung</a>
                      </div>
                      <h2 class="article_titile"><a href="single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
                    </article>
                  </li>
                  <li class="wow fadeInDown">
                    <figure class="featured_img">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/550x400.jpg" alt="img"></a>
                    </figure>
                    <article class="featured_article">
                      <div class="article_category">
                        <a href="#">Technology <i class="fa fa-angle-right"></i></a>
                        <a href="#">Mobile  <i class="fa fa-angle-right"></i></a>
                        <a href="#">Samsung</a>
                      </div>
                      <h2 class="article_titile"><a href="single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
                    </article>
                  </li>
                  <li class="wow fadeInDown">
                    <figure class="featured_img">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/550x400.jpg" alt="img"></a>
                    </figure>
                    <article class="featured_article">
                      <div class="article_category">
                        <a href="#">Technology <i class="fa fa-angle-right"></i></a>
                        <a href="#">Mobile  <i class="fa fa-angle-right"></i></a>
                        <a href="#">Samsung</a>
                      </div>
                      <h2 class="article_titile"><a href="single_page.html">Apple iPad Production Reaches 4 Million</a></h2>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui lectus, pharetra nec elementum eget, vulputate ut nisi. Aliquam accumsan, nulla sed feugiat...</p>
                    </article>
                  </li>
                </ul><!-- End featured post -->
                <!-- start post pagination -->
                <nav>
                  <ul class="pagination">
                    <li><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
                  </ul>
                </nav>
                <!-- End post pagination -->
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="right_sidebar">
                <!-- start single widget -->
                <div class="single_widget">
                  <h2>Popular Post</h2>
                  <ul class="ppost_nav wow fadeInDown">
                    <li>
                      <div class="media">
                        <a class="media-left" href="single_page.html">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                     <li>
                      <div class="media">
                        <a class="media-left" href="single_page.html">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="single_page.html">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                     <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                      <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>

                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <a class="media-left" href="#">
                          <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                        </a>
                        <div class="media-body">
                          <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div><!-- End single widget -->
                <!-- start single widget -->
                <div class="single_widget">
                  <!-- tab section-->
                  <ul class="nav nav-tabs custom-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#recentPost" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">Recent Post</a></li>
                    <li role="presentation" class=""><a href="#recentComent" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">Recent Comment</a></li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="mostPopular">
                      <ul class="ppost_nav wow fadeInDown">
                        <li>
                          <div class="media">
                            <a class="media-left" href="single_page.html">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                         <li>
                          <div class="media">
                            <a class="media-left" href="single_page.html">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="single_page.html">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                         <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>

                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="recentComent">
                      <ul class="ppost_nav wow fadeInDown">
                        <li>
                          <div class="media">
                            <a class="media-left" href="single_page.html">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                         <li>
                          <div class="media">
                            <a class="media-left" href="single_page.html">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="single_page.html">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                         <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                          <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>

                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="media">
                            <a class="media-left" href="#">
                              <img src="<?php echo base_url() ?>assets/img/70x70.jpg" alt="img">
                            </a>
                            <div class="media-body">
                              <a class="catg_title" href="#"> Aliquam malesuada diam eget turpis varius</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div><!-- End tab section-->
                </div><!-- End single widget -->
                <!-- start single widget -->
                <div class="single_widget">
                 <h2>Categories</h2>
                 <ul>
                   <li class="cat-item"><a href="#">Technology</a></li>
                   <li class="cat-item"><a href="#">Games</a></li>
                   <li class="cat-item"><a href="#">Business</a></li>
                   <li class="cat-item"><a href="#">Gallery</a></li>
                   <li class="cat-item"><a href="#">Slider</a></li>
                   <li class="cat-item"><a href="#">Life & Style</a></li>
                   <li class="cat-item"><a href="#">Sports</a></li>
                 </ul>
                </div><!-- End single widget -->
                 <!-- start single widget -->
                <div class="single_widget">
                 <h2>Category Archive</h2>
                 <select class="catgArchive">
                    <option>Select Category</option>
                    <option>Life styles</option>
                    <option>Sports</option>
                    <option>Technology</option>
                    <option>Treads</option>
                  </select>

                </div><!-- End single widget -->
                 <!-- start single widget -->
                <div class="single_widget">
                 <h2>Links</h2>
                 <ul>
                   <li><a href="#">Log in</a></li>
                   <li><a href="#">Entries RSS</a></li>
                   <li><a href="#">Comment RSS</a></li>
                   <li><a href="#">Wordpress.org</a></li>
                 </ul>
                </div><!-- End single widget -->
              </div>
            </div>
          </div>
        </div>
      </section><!-- End content section -->
      <!-- start footer area -->
      <footer id="footer">
        <div class="footer_top">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm3">
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
              </div>
              <div class="col-lg-3 col-md-3 col-sm3">
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
              </div>
              <div class="col-lg-3 col-md-3 col-sm3">
                <div class="footer_widget wow fadeInRightBig">
                  <h2>Flickr Images</h2>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm3">
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
              </div>
            </div>
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

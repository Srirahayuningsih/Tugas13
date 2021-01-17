<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>0baju Yak</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <center><marquee bgcolor="green" style="color:white;" direction="up" scrollamount="2" align="center" behavior="alternate" width="90%"><marquee direction="right"> New Product Collection</marquee></marquee></center>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ url ('public') }} /vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ url ('public') }} /vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ url ('public') }} /vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{ url ('public') }} /vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ url ('public') }} /css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ url ('public') }} /css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url ('public') }} /favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-success btn-sm">Offer of the day</a><a href="#" class="ml-1">Get flat 35% off on orders over Rp.50.000!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <li class="list-inline-item"><a href="home">Home</a></li>
                <li class="list-inline-item"><a href="about">About</a></li>
                 <li class="list-inline-item"><a href="detail">Detail</a></li>
                <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                <li class="list-inline-item"><a href="register">Register</a></li>
                <li class="list-inline-item"><a href="contact">Contact</a></li></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="customer-orders.html" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.html" class="navbar-brand home"><img src="{{ url ('public') }} /img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="{{ url ('public') }} /img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          
              <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
             
              
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
               
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Filter</h3>
                </div>
        <div class="card-body">
          <form action="{{url ('admin/produk/filter') }}" method="get">
            @csrf
            <div class="form-group">
              <label for="" class="control-label">Nama</label>
              <input type="text" class="form-control" name="nama" value="{{$nama ?? ''}}">
            </div>

            <div class="form-group">
              <label for="" class="control-label">Stok</label>
              <input type="text" class="form-control" name="stok" value="{{$stok ?? ''}}">
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="control-label">Harga Min</label>
                      <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ''}}">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="" class="control-label">Harga Max</label>
                      <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ''}}">
                </div>
              </div>
            </div>
            <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
          </form>
        </div>
      </div>

              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="{{ url ('public') }} /img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="{{ url ('public') }} /img/detailbig1.jpg" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="{{ url ('public') }} /img/detailbig2.jpg" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="{{ url ('public') }} /img/detailbig3.jpg" alt="" class="img-fluid"></div>
                  </div>
                  
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center">White Blouse Armani</h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material &amp; care and sizing</a></p>
                    <p class="price">Rp.124.000</p>
                    <p class="text-center buttons"><a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a><a href="basket.html" class="btn btn-outline-primary"><i class="fa fa-heart"></i> Add to wishlist</a></p>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="img/detailsquare.jpg" alt="" class="{{ url ('public') }} /img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/detailsquare2.jpg" alt="" class="{{ url ('public') }} /img-fluid"></button>
                    <button class="owl-thumb-item"><img src="img/detailsquare3.jpg" alt="" class="{{ url ('public') }} /img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">

                <p></p>
                <h4>Product details</h4>
                <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                <h4>Material &amp; care</h4>
                <ul>
                  <li>Polyester</li>
                  <li>Machine wash</li>
                </ul>
                <h4>Size &amp; Fit</h4>
                <ul>
                  <li>Regular fit</li>
                  <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                </ul>
                <blockquote>
                  <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
                <hr>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
              
                  <!-- /.product-->
                </div>
              </div>
            </div>
            <!-- /.col-md-9-->
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
            <p class="social"><a href="#" class="facebook external"><i class="fa fa-facebook"></i></a><a href="#" class="twitter external"><i class="fa fa-twitter"></i></a><a href="#" class="instagram external"><i class="fa fa-instagram"></i></a><a href="#" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="#" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-right">©2020 Sri Rahayu Ningsih.</p>
          </div>
          
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="{{ url ('public') }} /vendor/jquery/jquery.min.js"></script>
    <script src="{{ url ('public') }} /vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url ('public') }} /vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{ url ('public') }} /vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ url ('public') }} /vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="{{ url ('public') }} /js/front.js"></script>
  </body>
</html>
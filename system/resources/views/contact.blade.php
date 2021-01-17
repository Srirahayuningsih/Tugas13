<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ObajuYak</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
     <center><marquee bgcolor="forestgreen" style="color:white;" direction="up" scrollamount="2" align="center" behavior="alternate" width="90%"><marquee direction="right"> New Produt Collection</marquee></marquee></center>
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
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
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
                <li class="list-inline-item"><a href="contact">Contact</a></li>
                
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
                <form action="customer-orders" method="post">
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
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** PAGES MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Pages</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <li><a href="text" class="nav-link">Text page</a></li>
                    <li><a href="contact" class="nav-link">Contact page</a></li>
                    <li><a href="faq" class="nav-link">FAQ</a></li>
                  </ul>
                </div>
              </div>
              <!-- *** PAGES MENU END ***-->
              <div class="banner"><a href="#"><img src="{{ url ('public') }} /img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
              <div id="contact" class="box">
                <h1>Contact</h1>
                <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                <hr>
                <div class="row">
                  <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i>Address</h3>
                    <p>13/25 New Avenue<br>New Heaven<br>45Y 73J<br>England<br><strong>Great Britain</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-phone"></i> Call center</h3>
                    <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                    <p><strong>+33 555 444 333</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                    <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                    <ul>
                      <li><strong><a href="mailto:">info@fakeemail.com</a></strong></li>
                      <li><strong><a href="#">Ticketio</a></strong> - our ticketing support platform</li>
                    </ul>
                  </div>
                  <!-- /.col-sm-4-->
                </div>
                <!-- /.row-->
                <hr>
                <div id="map"></div>
                <hr>
                <h2>Contact form</h2>
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input id="firstname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                    </div>
                  </div>
                  <!-- /.row-->
                </form>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="{{ url ('public') }} /js/map.js"></script>
  </body>
</html>
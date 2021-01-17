 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ObajuYak</title>
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
      * TOPBAR *
      _______
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
                <p class="text-center text-muted"><a href="register"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- * TOP BAR END *-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="{{ url ('public') }} /_src/distribution/vendor/index.html" class="navbar-brand home"> </a>
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
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="{{ url ('public') }} /img/main-slider1.jpg" alt="" class="{{ url ('public') }} /img-fluid"></div>
                <div class="item"><img src="{{ url ('public') }} /img/main-slider2.jpg" alt="" class="{{ url ('public') }} /img-fluid"></div>
                <div class="item"><img src="{{ url ('public') }} /img/main-slider3.jpg" alt="" class="{{ url ('public') }} /img-fluid"></div>
                <div class="item"><img src="{{ url ('public') }} /img/main-slider4.jpg" alt="" class="{{ url ('public') }} /img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>

         <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">We love our customers</a></h3>
                  <p class="mb-0">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Best prices</a></h3>
                  <p class="mb-0">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">100% satisfaction guaranteed</a></h3>
                  <p class="mb-0">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- * ADVANTAGES END *-->
        <!--
        * HOT PRODUCT SLIDESHOW *
        _______
        -->
        <div id="hot">
          <div class="box py-4">
            <div class ="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Hot this week</h2>
                </div>
              </div>
            </div>
          </div>
     <div class="Container">
  <div class="row">
    <div class="col-md-2">

      <div class="card">
        <div class="card-header">
          Filter
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
    </div>
  
          <div class="container">
            <div class="col-md-12">
            <div class="product-slider owl-carousel owl-theme">
                @foreach($list_produk as $produk)
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                         <div class="front"><a href="detail"><img src="{{ url ('public') }} /img/product1.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail"><img src="{{ url ('public') }} /img/product21.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="{{ url ('public') }} /img/product1.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail">{{$produk->nama}}</a></h3>
                    <h3><a href="detail">Rp.{{$produk->harga}}</a></h3>
                  </div>
                  <!-- /.text-->
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->

              </div>
                @endforeach
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- * HOT END *-->
        </div>
        <!--
        * GET INSPIRED *
        _______
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Get Inspired</h3>
              <p class="lead">Get the inspiration from our world class designers</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="{{ url ('public') }} /img/getinspired1.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="{{ url ('public') }} /img/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="{{ url ('public') }} /img/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- * GET INSPIRED END *-->
        <!--
        * BLOG HOMEPAGE *
        _______
        -->
        
        <div class="container">
          <div class="col-md-12">
            <div id="blog-homepage" class="row">
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post.html">Fashion now</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="post">
                  <h4><a href="post">Who is who - example blog post</a></h4>
                  <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a></p>
                  <hr>
                  <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div>
        <!-- /.container-->
        <!-- * BLOG HOMEPAGE END *-->
      </div>
    </div>
        <!-- Team-->
        <section class="page-section bg-dark text-white" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Baca Artikel</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="">
                            <div class="card bg-dark">
                              <div class="card-header bg-info">
                                <h4>{{$artikel->judul}}</h4>
                              </div>
                              <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                  <p style="font-size: 16px" class="text-justify">
                                    {!! nl2br($artikel->isi) !!}
                                    <hr style="border-color: white;">
                                  </p>
                                  <footer class="blockquote-footer text-white">Author : {{$artikel->penulis}} <cite title="Source Title">| Rilis : {{$artikel->tanggal}}</cite></footer>
                                  <hr style="border-color: white;">
                                </blockquote>
                              </div>
                              <h4 class="mt-5 pl-3">Halaman Komentar</h4>
                              @foreach($list_komentar as $komentar)
                              <div class="media mt-3 pl-3">
                                <img src="..." class="mr-3" alt="...">
                                <div class="media-body">
                                  <h5 class="mt-0">{{$komentar->nama}}</h5>
                                  <small>Email : {{$komentar->email}} | Tanggal : {{$komentar->created_at}}</small><br>
                                  <p>{{$komentar->isi}}</p>
                                </div>
                              </div>
                              @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5">
                    <h4 class="text-white ">Masukkan Komentar</h4>
                        <p class="large text-muted ">
                        <div class="card bg-dark ">
                            <form action="{{url('baca', $artikel->id)}}" method="post" onsubmit="return confirm('Komentar anda tidak dapat di ubah lagi saat menekan tombol submit. Lanjutkan ?');">
                                @csrf
                              <div class="form-row align-items-center">
                                <div class="col-4">
                                  <label for="inlineFormInput">Nama</label>
                                  <input type="text" class="form-control mb-2" id="inlineFormInput" name="nama">
                                </div>
                                <div class="col-4">
                                  <label for="inlineFormInputGroup">Alamat Email</label>
                                  <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="email">
                                  </div>
                                </div>
                                <div class="col-4">
                                  <button type="submit" class="btn btn-primary mt-5 btn-xl">Submit</button>
                                </div>
                              </div>
                              <div class="form-group col-8 pl-0 pr-1">
                                <label for="formGroupExampleInput">Isi Komentar</label>
                                <textarea class="form-control" rows="5" name="isi"></textarea>
                              </div>
                            </form>
                        </div>
                    </p></div>
                </div>
            </div>
        </section>
        <!-- Footer-->
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
    <!-- * FOOTER END *-->
    
    
    <!--
    * COPYRIGHT *
    _______
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
    <!-- * COPYRIGHT END *-->
    <!-- JavaScript files-->
    <script src="{{ url ('public') }} /vendor/jquery/jquery.min.js"></script>
    <script src="{{ url ('public') }} /vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url ('public') }} /vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="{{ url ('public') }} /vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ url ('public') }} /vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="{{ url ('public') }} /js/front.js"></script>
  </body>
</html>
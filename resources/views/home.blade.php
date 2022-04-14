<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Sock</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{ asset('css/home/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="{{ asset('images/home/fevicon.png') }}" type="image/gif" />
    <link rel="stylesheet" href="{{ asset('css/home/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/home/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <header class="section">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo"> <a href="index.html"><img src="images/home/logo.png"
                                            alt="#"></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> Home</li>
                                        <li> About</li>
                                        <li>Testmonial</li>
                                        <li>Shop</li>
                                        <li>Contact Us</li>
                                        <li class="last"><a href="#"><img
                                                    src="{{ asset('images/home/search_icon.png') }}" alt="icon" /></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <section>
        <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour</p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                                    <a class="btn btn-lg btn-primary" href="about.html" role="button">About </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="{{ asset('images/home/boksing-gloves.png') }}" alt="img" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour</p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                                    <a class="btn btn-lg btn-primary" href="about.html" role="button">About</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box ">
                                    <figure><img src="{{ asset('images/home/boksing-gloves.png') }}" alt="img" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Welcome to <strong class="color">Our Shop</strong></h1>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some form, by injected humour</p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Buy Now</a>
                                    <a class="btn btn-lg btn-primary" href="about.html" role="button">About</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="{{ asset('images/home/boksing-gloves.png') }}" alt="img" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <!-- plant -->
    <div id="plant" class="section  product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2><strong class="black"> Our</strong> Products</h2>
                        <span>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected randomised words which don't look even
                            slightly believable</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($products as $item)
        <div class="clothes_main section ">
            <div class="container">
                <div class="sport_product">
                    <figure><img src="{{ asset('images/home/basketball.png') }}" alt="img" /></figure>
                    <h3> $<strong class="price_text">{{ $item->price }}</strong></h3>
                    <h4>{{ $item->name }}</h4>
                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn btn-lg btn-danger"><i class="fa fa-shopping-cart"
                            style="font-size:24px"></i> Cart</button>
                    <button type="button" class="btn btn-lg btn-info"><i class="fa fa-credit-card"></i> Buy</button>





                    
                </div>
            </div>

        </div>
    @endforeach
    <!-- end plant -->
    <!--about -->
    <div class="section about ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                        <h2><strong class="black"> About</strong> Us</h2>
                        <span>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected randomised words which don't look even
                            slightly believable</span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    
    
</div>


    <div id="footer" class="Address layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage">
                        <div class="main">
                            <h1 class="address_text">Address</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address_2">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img src="{{ asset('images/home/map-icon.png') }}" /></span>
                            <span style="margin-top: 10px;">No.123 Chalingt Gates, Supper market New York</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img
                                    src="{{ asset('images/home/phone-icon.png') }}" /></span>
                            <span style="margin-top: 21px;">( +71 7986543234 )</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img
                                    src="{{ asset('images/home/email-icon.png') }}" /></span>
                            <span style="margin-top: 21px;">demo@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- Javascript files-->
    <script src="{{ asset('js/home/jquery.min.js') }}"></script>
    <script src="{{ asset('css/fontawesome-free-6.0.0-web/js/fontawesome.min.js') }}"></script>

    <script src="{{ asset('js/home/popper.min.js') }}"></script>
    <script src="{{ asset('js/home/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/home/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/home/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('js/home/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/home/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('js/home/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>

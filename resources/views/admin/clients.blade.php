<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">

    {{-- Livewire --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('css/admin/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{ asset('css/admin/modal') }}" rel="stylesheet">


    {{-- <!-- Waves Effect Css -->
    <link href="{{ asset('css/admin/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('css/admin/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('css/admin/morrisjs/morris.css') }}" rel="stylesheet" /> --}}

    <!-- Custom Css -->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/admin/all-themes.css') }}" rel="stylesheet" />

    
    @livewireStyles

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="/vendor/livewire/livewire.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .fixed-top{
            position:fixed;
            top:0;
            right:0;
            left:0;
            z-index:1030
        }
    </style>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="">
        {{-- page-loader-wrapper --}}
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">Admin Page</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                                class="material-icons">search</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info" style="background-image: url('{{ 'images/user-img-background.jpg' }}')">
                <div class="image">
                    <img src="{{ asset('images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John
                        Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="{{'/admin'}}">
                            <i class="material-icons">home</i>
                            <span>Product</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            {{-- pages/typography.html --}}
                            <i class="material-icons">account_circle</i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{'/admin/debit'}}">
                        <i class="material-icons">credit_card</i>
                            <span>Debit</span>
                        </a>
                    </li>


                    <li>
                        <a href="{{'/admin/departament'}}">
                        <i class="material-icons">location_city</i>
                            <span>Departament</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{'/admin/departament_operation'}}">
                        <i class="material-icons">local_shipping</i>
                            <span>Departament Operation</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{'/admin/sum_departament'}}">
                        <i class="material-icons">contact_mail</i>
                            <span>Finance</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{'/admin/departament-results'}}">
                        <i class="material-icons">lens</i>
                            <span>Finance</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{'/admin/reports'}}">
                        <i class="material-icons">report</i>
                            <span>Reports</span>
                        </a>
                    </li>
                </ul>
            </div>
    </section>



























    <br>
    @livewire('client-create')





    




























    @livewireScripts

    <script src="{{ asset('js/admin/plugins/jquery/jquery.min.js') }}"></script>


    <script src="{{ asset('js/admin/plugins/bootstrap/js/bootstrap.js') }}"></script>


    <script src="{{ asset('js/admin/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>


    <script src="{{ asset('js/admin/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- -->
    <script src="{{ asset('js/admin/plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('js/admin/plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('js/admin/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/morrisjs/morris.js') }}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('js/admin/plugins/chartjs/Chart.bundle.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('js/admin/plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('js/admin/plugins/flot-charts/jquery.flot.time.js') }}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('js/admin/plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin/admin.js') }}"></script>
    <script src="{{ asset('js/admin/index.js') }}"></script>

    <!-- Demo Js -->
    <script src="{{ asset('js/admin/demo.js') }}"></script>
</body>

</html>

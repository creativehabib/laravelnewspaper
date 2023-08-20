<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Every Sunday - Newspaper, Magazine & Blog Theme</title>
    <meta name="description" content="Newspaper, Magazine & Blog Theme">
    <meta name="keywords" content="Newspaper,Magazine,Blog,HTML,CSS,Bootstrap,JavaScript">
    <!-- All Stylesheets -->
    <link href="{{URL::asset('frontend/css/all-stylesheets.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- HEADER STARTS
    ========================================================================= -->
<header class="header-style-02">
    <!-- TOP ROW STARTS -->
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs">
                    <ul class="small-nav">
                        <li id="date"></li>
                        <li><a class="popup-with-form" href="#signin">Sign in / Join</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="site-map.html">Site Map</a></li>
                        <li><a href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- TOP ROW ENDS -->
    <!-- SIGNIN POPUP FORM STARTS -->
    <form id="signin" class="white-popup-block mfp-hide">
        <fieldset>
            <h1>Sign In</h1>
            <h2>Welcome, Login to your account.</h2>
            <ul>
                <li>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Username or Email" required>
                </li>
                <li>
                    <input id="password" name="password" class="form-control" type="password" placeholder="Password" required>
                </li>
                <li><input class="btn btn-default" type='submit' value='LOG IN'></li>
                <li><a href="#">Forgot your password? Get help</a></li>
            </ul>
        </fieldset>
    </form>
    <!-- SIGNIN POPUP FORM ENDS -->
    <!-- LOGO & ADS STARTS -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo"><a href="{{url('/')}}"><img src="{{URL::asset('frontend/images/logo/logo.jpg')}}" alt="" class="img-responsive center-block"></a></div>
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="ad-728x90 visible-lg visible-md"><img src="{{URL::asset('frontend/images/ads/728x90/3d_728x90_v2.gif')}}" alt="" class="img-responsive center-block"></div>
                <div class="ad-468x60 visible-sm"><img src="{{URL::asset('frontend/images/ads/728x90/3d_728x90_v2.gif')}}" alt=""></div>
            </div>
        </div>
    </div>
    <!-- LOGO & ADS ENDS -->
    <!-- NAVIGATION STARTS
        ========================================================================= -->
    @include('frontend.navbar')
    <!-- /. NAVIGATION ENDS
        ========================================================================= -->
</header>
<!-- /. HEADER ENDS
    ========================================================================= -->
<!-- SLIDER STARTS
    ========================================================================= -->
@include('frontend.slider')
<!-- /. SLIDER ENDS
    ========================================================================= -->
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
@include('frontend.grids.grid1')
<!-- /. CATEGORY GRID ENDS
    ========================================================================= -->
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
@include('frontend.grids.grid2')
<!-- /. CATEGORY GRID ENDS
    ========================================================================= -->
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
@include('frontend.grids.grid3')
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
@include('frontend.grids.grid4')
<!-- /. CATEGORY GRID STARTS
    ========================================================================= -->
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
@include('frontend.grids.grid5')
<!-- CATEGORY GRID STARTS
    ========================================================================= -->
<!-- FOOTER STARTS
    ========================================================================= -->
@include('frontend.layouts.footer')
<!-- /. FOOTER ENDS
    ========================================================================= -->
<!-- TO TOP STARTS
    ========================================================================= -->
<a href="#" class="scrollup" style="display: block;">Scroll</a>
<!-- /. TO TOP ENDS
    ========================================================================= -->
<!-- LOAD JQUERY LIBRARY -->
<script type="text/javascript" src="{{URL::asset('frontend/js/jquery-1.12.4/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
<!-- Hover Dropdown Menu -->
<script src="{{URL::asset('frontend/js/bootstrap-hover/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
<!-- Mean Menu -->
<script src="{{URL::asset('frontend/js/meanmenu/jquery.meanmenu.js')}}"></script>
<!-- Sticky -->
<script type="text/javascript" src="{{URL::asset('frontend/js/sticky/jquery.sticky.js')}}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{URL::asset('frontend/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="{{URL::asset('frontend/js/magnific-popup/jquery.magnific-popup.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{URL::asset('frontend/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('frontend/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
    (Load Extensions only on Local File Systems !
    The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="revolution/js/slider-fullwidth.js"></script>
<!-- AJAX Contact Form -->
<script type="text/javascript" src="js/contact/contact-form.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{URL::asset('frontend/js/styleswitcher/styleswitcher.js')}}"></script>
<!-- FitVids -->
<script type="text/javascript" src="{{URL::asset('frontend/js/fitvids/jquery.fitvids.js')}}"></script>
<!-- Custom -->
<script type="text/javascript" src="{{URL::asset('frontend/js/custom/custom.js')}}"></script>
</body>

</html>

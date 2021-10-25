<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Free Snow Bootstrap Website Template | Shop :: w3layouts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('public/site') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('public/site') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/site') }}/dist/css/adminlte.min.css">
    <link href="{{ url('public/snowboarding/css') }}/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{ url('public/snowboarding/css') }}/style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://unpkg.com/react-paginate@7.1.3/./dist/react-paginate.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });

            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });

            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (!$clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.html"><img src="{{ url('public/site') }}/Logo19pm.png" alt="" width="80"
                                    height="80" /></a>
                        </div>
                        <div class="menu">
                            <a class="toggleMenu" href="#"><img
                                    src="{{ url('public/snowboarding/images') }}/nav.png" alt="" /></a>
                            <ul class="nav" id="nav">
                                <li class="current"><a href="{{ route('frontend') }}">Shop</a></li>
                                <li><a href="">Thành Viên</a></li>
                                <li><a href="">Vé</a></li>
                                <li><a href="">Sự Kiện</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <li>
                                            <a href="{{ route('khachhang.dangnhap') }}"><i
                                                    class="bi bi-box-arrow-in-left"></i>
                                                Đăng nhập </a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" style="color:#000;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                               document.getElementById('logout-form').submit();">
                                                <i class="bi bi-box-arrow-right"\></i> Đăng Xuất
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                         
                        </ul>
                        <script type="text/javascript" src="{{ url('public/snowboarding/js') }}/responsive-nav.js"></script>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                    <!-- start search-->
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form action="{{ route('frontend') }}" method="get">
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search"
                                    name="query" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <!----search-scripts---->
                    <script src="{{ url('public/snowboarding/js') }}/classie.js"></script>
                    <script src="{{ url('public/snowboarding/js') }}/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="shop_top">
        <div class="container">
            <div class="row shop_box-top">
                @yield('content')
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>Products</h4>
                    <li><a href="#">Mens</a></li>
                    <li><a href="#">Womens</a></li>
                    <li><a href="#">Youth</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>About</h4>
                    <li><a href="#">Careers and internships</a></li>
                    <li><a href="#">Sponserships</a></li>
                    <li><a href="#">team</a></li>
                    <li><a href="#">Catalog Request/Download</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>Customer Support</h4>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Shipping and Order Tracking</a></li>
                    <li><a href="#">Easy Returns</a></li>
                    <li><a href="#">Warranty</a></li>
                    <li><a href="#">Replacement Binding Parts</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="footer_box">
                    <h4>Newsletter</h4>
                    <div class="footer_search">
                        <form>
                            <input type="text" value="Enter your email" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Enter your email';}">
                            <input type="submit" value="Go">
                        </form>
                    </div>
                    <ul class="social">
                        <li class="facebook"><a href="#"><span> </span></a></li>
                        <li class="twitter"><a href="#"><span> </span></a></li>
                        <li class="instagram"><a href="#"><span> </span></a></li>
                        <li class="pinterest"><a href="#"><span> </span></a></li>
                        <li class="youtube"><a href="#"><span> </span></a></li>
                    </ul>

                </ul>
            </div>
        </div>
        <div class="row footer_bottom">
            <div class="copy">
                <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
            </div>
        </div>
    </div>
</div>
<script src="{{ url('public/site') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('public/site') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="{{ url('public/site') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('public/site') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('public/site') }}/dist/js/demo.js"></script>
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</body>

</html>

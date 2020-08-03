<!DOCTYPE html>
<html lang="vi">
<head>
    <title>WebSite Bán Đệm</title>
    <meta charset="UTF-8">
{{--    <meta name="description" content=" Divisima | eCommerce Template">--}}
{{--    <meta name="keywords" content="divisima, eCommerce, creative, html">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
    <!-- Favicon -->
    <link href="{{asset('public/admin/images/logo.png')}}" rel="shortcut icon"/>

    <!-- Google Font -->
{{--    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">--}}


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/user/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('public/user/css/style.css')}}"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="{{URL::to('/trang-chu')}}" class="site-logo">
                        <img src="{{asset('public/user/img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-5 col-lg-4">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search on divisima ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5" style="padding: unset" >
                    <div class="user-panel" style="float: right">
                        <div class="up-item">
                            <i class="flaticon-profile"></i>
                            <a href="{{URL::to('/login-checkout')}}" style="color: blue">Đăng Nhập</a> hoặc <a href="{{URL::to('/register')}}" style="color: blue">Tạo Tài Khoản</a>
                        </div>
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>
                                    <?php
                                    $content = Cart::count();
                                    echo $content;
                                    ?>
                                </span>
                            </div>
                            <a href="{{URL::to('/show-cart')}}">Giỏ hàng của tôi</a>
                        </div>
                    </div>
                </div>
                <div class="main-menu col-xl-1 col-lg-1" style="padding-top: 0.5%">
                    <li><i class="fa fa-cog" style="border: 1px black solid; padding: 5px;"></i>
                        <ul class="sub-menu">
                            <li><a href="#">Trang cá nhân</a></li>
                            <li><a href="#">Đổi mật khẩu</a></li>
                            <li><a href="#">lịch sử mua hàng</a></li>
                            <li><a href="#">đăng xuất</a></li>
                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="{{URL::to('/trang-chu')}}">Trang Chủ</a></li>
                <li><a href="{{URL::to('/product-select')}}">Sản Phẩm</a></li>
                <li><a href="#">Sản phẩm mới
                        <span class="new">New</span>
                    </a></li>
                <li><a href="#">TOP Bán chạy</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->


@yield('content')


<!-- Footer section -->
<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">
            <a href="index.html"><img src="{{asset('public/user/img/logo-light.png')}}" alt=""></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>About</h2>
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <img src="{{asset('public/user/img/cards.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <ul>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Track Orders</a></li>
                        <li><a href="">Returns</a></li>
                        <li><a href="">Jobs</a></li>
                        <li><a href="">Shipping</a></li>
                        <li><a href="">Blog</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Partners</a></li>
                        <li><a href="">Bloggers</a></li>
                        <li><a href="">Support</a></li>
                        <li><a href="">Terms of Use</a></li>
                        <li><a href="">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <div class="fw-latest-post-widget">
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="{{asset('public/user/img/blog-thumbs/1.jpg')}}"></div>
                            <div class="lp-content">
                                <h6>what shoes to wear</h6>
                                <span>Oct 21, 2018</span>
                                <a href="#" class="readmore">Read More</a>
                            </div>
                        </div>
                        <div class="lp-item">
                            <div class="lp-thumb set-bg" data-setbg="{{asset('public/user/img/blog-thumbs/2.jpg')}}"></div>
                            <div class="lp-content">
                                <h6>trends this year</h6>
                                <span>Oct 21, 2018</span>
                                <a href="#" class="readmore">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Questions</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>LongCongDdao Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>55 Giải Phóng,2 Bà Trưng, Hà Nội</p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+89 356789900</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>long143961@nuce.edu.vn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="https://www.instagram.com/__long_ml___/" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                <a href="#" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="https://www.facebook.com/longmolo" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="#" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="https://www.youtube.com/c/longm%E1%BB%9Dl%E1%BB%9D" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="#" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="#" target="_blank"> Long CĐ</a> <i class="fa fa-heart-o" aria-hidden="true"></i></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
    </div>
</section>
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="{{asset('public/user/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('public/user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('public/user/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('public/user/js/main.js')}}"></script>

</body>
</html>

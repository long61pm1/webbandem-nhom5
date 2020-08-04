@extends('first_page')
@section('content')

<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('public/user/img/chan_ga.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <span>Big Sale</span>
                        <h2>BỘ chăn ga màu xanh nhạt</h2>
                        <p style="color:#000c19">Bộ sản phẩm bao gồm đầy đủ,chăn, ga, gối, đệm đã lồng ruột của nhẵn hiểu Everon.
                        giám giá mạnh.</p>
                        <a href="#" class="site-btn sb-line">KHÁM PHÁ</a>
                        <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>from</span>
                    <h2>$29</h2>
                    <p>SHOP NOW</p>
                </div>
            </div>
        </div>
        <div class="hs-item set-bg" data-setbg="{{asset('public/user/img/sanpham.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <span>Big Sale</span>
                        <h2>Bộ chăn ga màu hường</h2>
                        <p style="color:#000c19">Bộ sản phẩm bao gồm đầy đủ,chăn, ga, gối, đệm đã lồng ruột của nhẵn hiểu Sông Hồng.
                            giám giá mạnh.</p>
                        <a href="#" class="site-btn sb-line">KHÁM PHÁ</a>
                        <a href="#" class="site-btn sb-white">THÊM VÀO GIỎ</a>
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>from</span>
                    <h2>$29</h2>
                    <p>SHOP NOW</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>
<!-- Hero section end -->



<!-- Features section -->
<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="{{asset('public/user/img/icons/1.png')}}" alt="#">
                    </div>
                    <h2>Thanh toán nhanh chóng</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="{{asset('public/user/img/icons/2.png')}}" alt="#">
                    </div>
                    <h2>Sản phẩm chất lượng</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="{{asset('public/user/img/icons/3.png')}}" alt="#">
                    </div>
                    <h2>Giao hàng nhanh, Uy Tín</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->


<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2>CÁC SẢN PHẨM MỚI</h2>
        </div>
        <div class="product-slider owl-carousel">
            @foreach($all_product as $key=>$pro)
            <div class="product-item">
                <div class="pi-pic">
                    <div class="tag-new">New</div>
                    <img src="{{asset('public/uploads/products/'.$pro->product_image)}}" alt="">
                    <div class="pi-links">
                        <a href="{{URL::to('/add-to-cart/'.$pro->product_id)}}" class="add-card"><i class="flaticon-bag"></i><span>Thêm vào giỏ</span></a>
                        <a href="{{URL::to('/product-detail/'.$pro->product_id)}}" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>{{number_format($pro->product_price)}} VNĐ</h6>
                    <p>{{$pro->product_name}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- letest product section end -->



<!-- Product filter section -->
<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>NHỮNG SẢN PHẨM BÁN CHẠY TỐP ĐẦU</h2>
        </div>
        <ul class="product-filter-menu">
            <li><a href="#">CHĂN</a></li>
            <li><a href="#">GA</a></li>
            <li><a href="#">GỐI</a></li>
            <li><a href="#">ĐỆM</a></li>
            <li><a href="#">BÀN</a></li>
            <li><a href="#">GHẾ</a></li>
            <li><a href="#">TỦ</a></li>
            <li><a href="#">GIƯỜNG</a></li>
        </ul>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-sale">ON SALE</div>
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="{{asset('public/user/img/avatar_default.png')}}" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-5">
            <a href="{{URL::to('/product-select')}}">
                <button class="site-btn sb-line sb-dark" >XEM THÊM</button>
            </a>
        </div>
    </div>
</section>
<!-- Product filter section end -->


<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="banner set-bg" data-setbg="{{asset('public/user/img/banner-bg.jpg')}}">
            <div class="tag-new">NEW</div>
            <span>Đệm mới nhất</span>
            <h2>SIÊU ĐẸP, CHẤT LƯỢNG</h2>
            <a href="{{URL::to('/product-select')}}" class="site-btn">MUA NGAY</a>
        </div>
    </div>
</section>
<!-- Banner section end  -->

@endsection

@extends('first_page')
@section('content')

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>TRANG CHI TIẾT SẢN PHẨM</h4>
        <div class="site-pagination">
            <a href="{{URL::to('/trang-chu')}}">Home</a> /
            <a href="">Shop</a> /
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- product section -->
<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="{{URL::to('/product-select')}}"> &lt;&lt; Back to Category</a>
        </div>
        @foreach($product_details as $key=>$pro_de)
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="{{asset('public/uploads/products/'.$pro_de->product_image)}}" alt="">
                </div>
                <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">
                        <div class="pt active" data-imgbigurl="{{asset('public/uploads/products/'.$pro_de->product_image)}}"><img src="{{asset('public/uploads/products/'.$pro_de->product_image)}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('public/user/img/single-product/2.jpg')}}"><img src="{{asset('public/user/img/single-product/thumb-2.jpg')}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('public/user/img/single-product/3.jpg')}}"><img src="{{asset('public/user/img/single-product/thumb-3.jpg')}}" alt=""></div>
                        <div class="pt" data-imgbigurl="{{asset('public/user/img/single-product/4.jpg')}}"><img src="{{asset('public/user/img/single-product/thumb-4.jpg')}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details">
                <h2 class="p-title">{{$pro_de->product_name}}</h2>
                <h3 class="p-price">{{number_format($pro_de->product_price)}} VNĐ</h3>
                <h4 class="p-stock">Trạng thái: <span>Còn hàng</span></h4>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>
{{--                <div class="p-review">--}}
{{--                    <a href="">3 reviews</a>|<a href="">Add your review</a>--}}
{{--                </div>--}}
                <div class="p-review">
                    Số lượng còn trong kho: 300
                </div>
{{--                <div class="fw-size-choose">--}}
{{--                    <p>Size</p>--}}
{{--                    <div class="sc-item">--}}
{{--                        <input type="radio" name="sc" id="xs-size">--}}
{{--                        <label for="xs-size">32</label>--}}
{{--                    </div>--}}
{{--                    <div class="sc-item">--}}
{{--                        <input type="radio" name="sc" id="s-size">--}}
{{--                        <label for="s-size">34</label>--}}
{{--                    </div>--}}
{{--                    <div class="sc-item">--}}
{{--                        <input type="radio" name="sc" id="m-size" checked="">--}}
{{--                        <label for="m-size">36</label>--}}
{{--                    </div>--}}
{{--                    <div class="sc-item">--}}
{{--                        <input type="radio" name="sc" id="l-size">--}}
{{--                        <label for="l-size">38</label>--}}
{{--                    </div>--}}
{{--                    <div class="sc-item disable">--}}
{{--                        <input type="radio" name="sc" id="xl-size" disabled>--}}
{{--                        <label for="xl-size">40</label>--}}
{{--                    </div>--}}
{{--                    <div class="sc-item">--}}
{{--                        <input type="radio" name="sc" id="xxl-size">--}}
{{--                        <label for="xxl-size">42</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="quantity">
                    <p>Số lượng</p>
                    <div class="pro-qty"><input type="text" value="1"></div>
                </div>
                <a href="#" class="site-btn">Thêm vào giỏ</a>
                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Thông Tin</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <p>{{$pro_de->product_desc}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Nội dung chi tiết </button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="{{asset('public/user/img/cards.png')}}" alt="">
                                <p>{{$pro_de->product_content}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingThree">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Giao hàng và trả lại</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body">
                                <h4>Trả lại trong 7 ngày</h4>
                                <p>Thanh toán tiền khi giao hàng<br>Giao hàng tận nhà(<15km) <span>1 - 2 days</span></p>
                                <p>Chúng tôi chỉ nhận lại hàng khi có lỗi của nhà xản suất và sẽ khắc phục hoặc đổi mới cho quý khách.
                                    Sẽ không nhận lại hàng bảo hành khi đó là lỗi của người dùng, nếu có sẽ tính phí</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-sharing">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- product section end -->


<!-- RELATED PRODUCTS section -->
<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>NHỮNG SẢN PHẨM LIÊN QUAN</h2>
        </div>
        <div class="product-slider owl-carousel">
            @foreach($relate as $key=>$re_pro)
            <div class="product-item">
                <div class="pi-pic">
                    <img src="{{asset('public/uploads/products/'.$re_pro->product_image)}}" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>THÊM VÀO GIỎ</span></a>
                        <a href="{{URL::to('/product-detail/'.$re_pro->product_id)}}" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>{{number_format($pro_de->product_price)}} VNĐ</h6>
                    <p>{{$re_pro->product_name}} </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- RELATED PRODUCTS section end -->

@endsection

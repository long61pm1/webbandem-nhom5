@extends('first_page')
@section('content')

    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>TRANG SẢN PHẨM</h4>
            <div class="site-pagination">
                <a href="{{URL::to('/trang-chu')}}">Trang Chủ</a> /
                <a href="">Cửa Hàng</a> /
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- Category section -->
    <section class="category-section spad">
        <div style="margin-left: 5%; margin-right: 5%">
            <div class="row">
                <div class="col-lg-2 order-2 order-lg-1">
                    <div class="filter-widget">
                        <h2 class="fw-title">Danh Mục</h2>
                        <ul class="category-menu">
                            <li><a href="#">Đệm</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Đệm bông ép <span>(2)</span></a></li>
                                    <li><a href="#">Đệm cao su<span>(56)</span></a></li>
                                    <li><a href="#">Đệm lò xo<span>(36)</span></a></li>
                                    <li><a href="#">Đệm xốp giá rẻ <span>(27)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Bàn</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Bàn trang điểm <span>(2)</span></a></li>
                                    <li><a href="#">Bàn gấp<span>(56)</span></a></li>
                                    <li><a href="#">bàn nhựa học sinh<span>(36)</span></a></li>
                                    <li><a href="#">bàn gỗ ép văn phòng<span>(6)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Ghế</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Ghế Đôn <span>(2)</span></a></li>
                                    <li><a href="#">Ghế xoay<span>(56)</span></a></li>
                                    <li><a href="#">Ghế gấp<span>(36)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Chăn</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Chăn hè <span>(2)</span></a></li>
                                    <li><a href="#">Chăn nỉ<span>(56)</span></a></li>
                                    <li><a href="#">chăn bông<span>(36)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Ga</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Ga chun<span>(2)</span></a></li>
                                    <li><a href="#">Ga buộc<span>(56)</span></a></li>
                                    <li><a href="#">Ga chống thấm<span>(36)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Gối</a></li>
                            <li><a href="#">Tủ</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Tủ nhựa <span>(2)</span></a></li>
                                    <li><a href="#">Tủ gỗ<span>(56)</span></a></li>
                                    <li><a href="#">Tủ vải<span>(36)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Giường</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Gượng gấp<span>(2)</span></a></li>
                                    <li><a href="#">Giường gỗ<span>(56)</span></a></li>
                                </ul>
                            </li>
                            <li><a href="#">Màn</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Khung màn<span>(2)</span></a></li>
                                    <li><a href="#">Màn có của<span>(56)</span></a></li>
                                    <li><a href="#">Màn không của<span>(6)</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h2 class="fw-title">Thương hiệu</h2>
                        <ul class="category-menu">
                            @foreach($brand as $key=> $v_brand)
                            <li><a href="{{URL::to('list-pro-by-brand/'.$v_brand->brand_id)}}">{{$v_brand->brand_name}}
                                    <?php
                                        $count=0;
                                        foreach ($all_product as $key=> $pro){
                                            if ($v_brand->brand_id==$pro->brand_id){
                                                $count++;
                                            }
                                        }
                                    ?>
                                    <span>( {{$count}} )</span>
                                </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @yield('chill_content')
                <div class="col-lg-2 order-3 order-lg-3">
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">refine by</h2>
                        <div class="price-range-wrap">
                            <h4>Price</h4>
                            <div
                                class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="10" data-max="270">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"
                                     style="left: 0%; width: 100%;"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                      style="left: 0%;">
								</span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                      style="left: 100%;">
								</span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">color by</h2>
                        <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" name="cs" id="gray-color">
                                <label class="cs-gray" for="gray-color">
                                    <span>(3)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="orange-color">
                                <label class="cs-orange" for="orange-color">
                                    <span>(25)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="yollow-color">
                                <label class="cs-yollow" for="yollow-color">
                                    <span>(112)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="green-color">
                                <label class="cs-green" for="green-color">
                                    <span>(75)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="purple-color">
                                <label class="cs-purple" for="purple-color">
                                    <span>(9)</span>
                                </label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" name="cs" id="blue-color" checked="">
                                <label class="cs-blue" for="blue-color">
                                    <span>(29)</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget mb-0">
                        <h2 class="fw-title">Size</h2>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xs-size">
                                <label for="xs-size">XS</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="s-size">
                                <label for="s-size">S</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="m-size" checked="">
                                <label for="m-size">M</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="l-size">
                                <label for="l-size">L</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xl-size">
                                <label for="xl-size">XL</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xxl-size">
                                <label for="xxl-size">XXL</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category section end -->

@endsection

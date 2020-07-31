@extends('pages.select_product')
@section('chill_content')
    <div class="col-lg-8  order-1 order-lg-2 mb-5 mb-lg-0">
        @foreach($brand_name as $key => $name)

            <h2 class="title text-center">Thương hiệu {{$name->brand_name}}</h2>
            <br><br>
        @endforeach
        <div class="row">
            @foreach($brand_by_id  as $key1=>$pro_1)
                <div class="col-lg-4 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <div class="tag-sale">ON SALE</div>
                            <img src="{{asset('public/uploads/products/'.$pro_1->product_image)}}" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i
                                        class="flaticon-bag"></i><span>THÊM VÀO GIỎ</span></a>
                                <a href="{{URL::to('/product-detail/'.$pro_1->product_id)}}" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                            </div>
                        </div>
                        <div class="pi-text">
                            <h6>{{number_format($pro_1->product_price)}} VNĐ</h6>
                            <p>{{$pro_1->product_name}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="text-center w-100 pt-3">
                <button class="site-btn sb-line sb-dark">LOAD MORE</button>
            </div>
        </div>
    </div>
@endsection

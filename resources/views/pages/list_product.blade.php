@extends('pages.select_product')
@section('chill_content')
<div class="col-lg-8  order-1 order-lg-2 mb-5 mb-lg-0">
    <div class="row">
        @foreach($all_product as $key=>$pro)
        <div class="col-lg-4 col-sm-6">
            <div class="product-item">
                <div class="pi-pic">
                    <div class="tag-sale">ON SALE</div>
                    <img src="{{asset('public/uploads/products/'.$pro->product_image)}}" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i
                                class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="fa fa-play-circle-o"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>${{$pro->product_price}}</h6>
                    <p>{{$pro->product_name}}</p>
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

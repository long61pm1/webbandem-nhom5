@extends('first_page')
@section('content')

    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>TRANG GIỎ HÀNG</h4>
            <div class="site-pagination">
                <a href="{{URL::to('/trang-chu')}}">Trang Chủ</a> /
                <a href="">Giỏ Hàng</a> /
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Giỏ hàng Của Tôi</h3>
                        <div class="cart-table-warp">
                            <?php
                            $content = Cart::content();
                            ?>
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-th">Sản Phẩm</th>
                                    <th class="quy-th">Số Lượng</th>
                                    <th class="total-th">Giá</th>
                                    <th class="total-th">Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($content as $key=> $v_content)
                                    <tr>
                                        <td class="product-col">
                                            <img src="{{asset('public/uploads/products/'.$v_content->options->image)}}"
                                                 alt="">
                                            <div class="pc-title">
                                                <h4>{{ $v_content->name }}</h4>
                                                <p>{{number_format($v_content->price)}} VNĐ</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="">
                                                    <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input type="text" name="cart_quantity" value="{{ $v_content->qty }}"
                                                               autocomplete="off" size="2">
                                                        <input type="hidden" value="{{$v_content->rowId}}"
                                                               name="rowId_cart" class="form-control">
                                                        <input type="submit" value="Cập nhật" name="update_qty"
                                                               class="btn btn-default btn-sm">
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-col"><h4>
                                                <?php
                                                $subtotal = $v_content->price * $v_content->qty;
                                                echo number_format($subtotal) . ' ' . 'VNĐ';
                                                ?>
                                            </h4>
                                        </td>
                                        <th class="total-th"><a
                                                href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i
                                                    class="fa fa-trash"
                                                    style="font-size: 25px; margin-top: 10px"></i></a></th>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span>{{Cart::subtotal()}} VNĐ</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right">
                    {{--                <form class="promo-code-form">--}}
                    {{--                    <input type="text" placeholder="Enter promo code">--}}
                    {{--                    <button>Submit</button>--}}
                    {{--                </form>--}}
                    <a href="" class="site-btn">Proceed to checkout</a>
                    <a href="" class="site-btn sb-dark">Continue shopping</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Related product section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title text-uppercase">
                <h2>TIẾP TỤC MUA</h2>
            </div>
            <div class="row">
                @foreach($continue_product as $key=> $con_pro)
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="pi-pic">
                                <div class="tag-new">New</div>
                                <img src="{{asset('public/uploads/products/'.$con_pro->product_image)}}" alt="">
                                <div class="pi-links">
                                    <a href="{{URL::to('/add-to-cart/'.$con_pro->product_id)}}" class="add-card"><i
                                            class="flaticon-bag"></i><span>THÊM VÀO GIỎ</span></a>
                                    <a href="{{URL::to('/product-detail/'.$con_pro->product_id)}}" class="wishlist-btn"><i
                                            class="fa fa-play-circle-o"></i></a>
                                </div>
                            </div>
                            <div class="pi-text">
                                <h6>{{number_format($con_pro->product_price)}} VNĐ</h6>
                                <p>{{$con_pro->product_name}} </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related product section end -->
@endsection

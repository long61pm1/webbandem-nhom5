@extends('admin_layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All-Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All-product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bảng liệt kê Sản Phẩm
                                <?php
                                use Illuminate\Support\Facades\Session;
                                $message = Session::get('message');
                                if ($message) {
                                    echo '<span style="width: 100%; color: red;font-size: 18px;text-align: center !important; font-weight: bold">', $message, '</span>';
                                    Session::put('message', null);
                                }
                                ?>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="text-align: center">
                                    <th style="width: 6%">
                                        <label class="i-checks m-b-none">
                                            <input type="checkbox"> <span style="margin-left: 10px">ID</span>
                                        </label>
                                    </th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giá Sản Phẩm</th>
                                    <th>Hình Sản Phẩm</th>
                                    <th>Danh Mục</th>
                                    <th>Thương Hiệu</th>
                                    <th>kích Cỡ</th>
                                    <th>Màu</th>
                                    <th style="width: 7%">Hiển Thị</th>
                                    <th style="width: 10%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_product as $key => $pro)
                                    <tr style="text-align: center">
                                        <td>
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox" name="post[]"><span style="margin-left: 10px">{{ $pro->product_id }}</span>
                                            </label>
                                        </td>
                                        <td>{{ $pro->product_name }}</td>
                                        <td>{{ $pro->product_price }}</td>
                                        <td style="padding: 5px"><img src="{{asset('public/uploads/products/'.$pro->product_image)}}" width="200"></td>
                                        <td>{{ $pro->category_name }}</td>
                                        <td>{{ $pro->brand_name }}</td>
                                        <td>{{ $pro->product_size }}</td>
                                        <td>{{ $pro->product_color }}</td>
                                        <td>
                                            <span class="text-ellipsis" >
                                            <?php
                                                if ($pro->product_status == 0) {
                                                ?>
                                                <a href="{{URL::to('/active-product/'.$pro->product_id)}}">
                                                    <span class="fa fa-eye-slash" style="font-size: 44px; color: red"></span>
                                                </a>
                                            <?php
                                                }
                                                else{
                                                ?>
                                                <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}">
                                                    <span class="fa fa-eye" style="font-size: 44px; color: green"></span>
                                                </a>
                                            <?php
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active" style="font-size: 30px;margin-right: 20%" ui-toggle-class="">
                                                <i class="fa fa-edit" style="color: #00e765 "></i></a>
                                            <a onclick="return confirm('bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active" style="font-size: 30px" ui-toggle-class="">
                                                <i class="fa fa-times" style="color: #9f1447"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Tên Sản Phẩm</th><th>Giá Sản Phẩm</th>
                                    <th>Hình Sản Phẩm</th>
                                    <th>Danh Mục</th>
                                    <th>Thương Hiệu</th>
                                    <th>kích Cỡ</th>
                                    <th>Màu</th>
                                    <th>Hiển Thị</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

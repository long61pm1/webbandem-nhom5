@extends('admin_layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All-Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All-brand</li>
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
                            <h3 class="card-title">Bảng thương hiệu sản phẩm
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
                                    <th style="width: 15%">
                                        <label class="i-checks m-b-none">
                                            <input type="checkbox"> <span style="margin-left: 10px">ID Thương Hiệu</span>
                                        </label>
                                    </th>
                                    <th>Tên Thương Hiệu</th>
                                    <th style="width: 10%">Hiển Thị</th>
                                    <th style="width: 20%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($all_brand_product as $key => $cat_pro)
                                    <tr style="text-align: center">
                                        <td>
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox" name="post[]"><span style="margin-left: 10px">{{ $cat_pro->brand_id }}</span>
                                            </label>
                                        </td>
                                        <td>{{ $cat_pro->brand_name }}</td>
                                        <td>
                                            <span class="text-ellipsis" >
                                            <?php
                                                if ($cat_pro->brand_status == 0) {
                                                ?>
                                                <a href="{{URL::to('/active-brand-product/'.$cat_pro->brand_id)}}">
                                                    <span class="fa fa-eye-slash" style="font-size: 44px; color: red"></span>
                                                </a>
                                            <?php
                                                }
                                                else{
                                                ?>
                                                <a href="{{URL::to('/unactive-brand-product/'.$cat_pro->brand_id)}}">
                                                    <span class="fa fa-eye" style="font-size: 44px; color: green"></span>
                                                </a>
                                            <?php
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{URL::to('/edit-brand-product/'.$cat_pro->brand_id)}}" class="active" style="font-size: 30px;margin-right: 20%" ui-toggle-class="">
                                                <i class="fa fa-edit" style="color: #00e765 "></i></a>
                                            <a onclick="return confirm('bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/delete-brand-product/'.$cat_pro->brand_id)}}" class="active" style="font-size: 30px" ui-toggle-class="">
                                                <i class="fa fa-times" style="color: #9f1447"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Tên Thương Hiệu</th>
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

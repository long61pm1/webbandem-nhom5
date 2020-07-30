@extends('admin_layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add-product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add-product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Sản Phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <?php
                        use Illuminate\Support\Facades\Session;
                        $message = Session::get('message');
                        if ($message){
                            echo'<span style="width: 100%; color: red;font-size: 18px;text-align: center !important; font-weight: bold">',$message,'</span>';
                            Session::put('message',null);
                        }
                        ?>
                        <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Sản Phẩm</label>
                                <input type="text" name="product_name" class="form-control"
                                       id="exampleInputEmail1" placeholder="Tên Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputpire">Giá Sản Phẩm</label>
                                <input type="text" name="product_price" class="form-control" id="exampleInputpire" placeholder="Giá Sản Phẩm">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimage">Hình ảnh sản phẩm</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputimage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô Tả Sản Phẩm</label>
                                <textarea style="resize: none" rows="8" name="product_desc" class="form-control" id="exampleInputPassword1"
                                          placeholder="Mô tả Sản Phẩm">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nội Dung Sản Phẩm</label>
                                <textarea style="resize: none" rows="8" name="product_content" class="form-control" id="exampleInputPassword1"
                                          placeholder="Nội Dung Sản Phẩm">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputCate">Danh Mục Sản Phẩm</label>
                                <select name="product_cate" class="form-control input-sm m-bot15">
                                    @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputBrand">THương hiệu</label>
                                <select name="product_brand" class="form-control input-sm m-bot15">
                                    @foreach($brand_product as $key => $brand)
                                        <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển Thị</label>
                                <select name="product_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputColor">Màu Sản Phẩm</label>
                                <input type="text" name="product_color" class="form-control" id="exampleInputColor" placeholder="Tên màu sản phẩm">
                            </div>
                            <input class="form-control" type="text" id="color" placeholder="click vào để chọn màu"/>
                            <script>
                                $('#color').colorpicker({});
                            </script>
                            <div class="form-group">
                                <label for="exampleInputSize">Kích THước Sản Phẩm</label>
                                <input type="text" name="product_size" class="form-control" id="exampleInputSize" placeholder="Kích tHước sản phẩm">
                            </div>
                            <button type="submit" name="add_product" class="btn btn-info">Thêm Sản Phẩm</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

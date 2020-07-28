@extends('admin_layout')
@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add-Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{URL::to('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add-Category</li>
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
                    Thêm Danh Mục Sản Phẩm
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
                        <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Danh Mục</label>
                                <input type="text" name="category_product_name" class="form-control"
                                       id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                <textarea style="resize: none" rows="8" name="category_product_desc" class="form-control" id="exampleInputPassword1"
                                          placeholder="Mô tả danh mục">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Hiển Thị</label>
                                <select name="category_product_status" class="form-control input-sm m-bot15">
                                    <option value="1">Hiển thị</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                            <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

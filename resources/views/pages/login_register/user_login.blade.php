@extends('user_login_register')
@section('log_content')
<form id="form1" name="form1" class="form-horizontal" action="{{URL::to('/user-login')}}" method="post">
    <div class="page-container">
        <!-- 8.1 home section -->
        <div class="home-section">
            <!-- 8.1.1 logo -->
            <div class="logo">
                <img class="animated fadeInDown logo_custom" src="{{asset('public/login/img/logo.png')}}" alt="logo">
            </div>
            <!-- end logo -->

            <!-- 8.1.2 Form login -->
            <div class="fullpage-section">
                <!-- content container -->
                <div
                    class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12  content-container">
                    <h3 class="small-title">Website bán đệm</h3>
                    <h2 class="title-with-border">Đăng nhập quyền <span class="highlight">User</span></h2>
                    <!-- content -->
                    <div class="content">
                        <p class="desc">
                            Vui lòng nhập tên đăng nhập và mật khẩu để sử dụng.
                        </p>
                    <?php
                    use Illuminate\Support\Facades\Session;
                    $message = Session::get('message');
                    if ($message){
                        echo'<span style="width: 100%; color: red;font-size: 18px;text-align: center;font-weight: bold">',$message,'</span>';
                        Session::put('message',null);
                    }
                    ?>
                    {{csrf_field()}}
                    <!-- 8.3.2.1 contact form container -->
                        <div class="contact-form-container col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="contact-notif col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div id="errsession" style="color:red;"></div>
                            </div>
                            <!-- end notif container -->

                            <!-- left side -->
                            <div id="frmlogin" class="col-lg-offset-2 col-md-offset-2 col-lg-8 col-md-8 col-xs-12">
                                <div class="form-row">
                                    <input id="username" name="user_username" class="contact-name load-virtual-keyboard"
                                           placeholder="Tên đăng nhập" type="text" value="" maxlength="50"
                                           autocomplete="new-password">
                                </div>
                                <div class="form-row">
                                    <input id="password" name="user_password" class="contact-email load-virtual-keyboard"
                                           placeholder="Mật khẩu" type="password" value="" maxlength="50"
                                           autocomplete="new-password">
                                </div>

                                <div id="keyboard-draggable" class="visible-sm visible-md visible-lg ">
                                    <div name="keyboard" class="keyboard" style="margin-top: 20px;"></div>
                                </div>
                                <a href="{{URL::to('/register')}}" style="float: left; padding-left: 8%; font-size: 18px"><b>Đăng ký</b> nếu chưa có tài khoản</a>
                            </div>
                            <!-- end left side -->

                            <!-- submit button -->
                            <div class="form-row col-lg-8 col-md-8 col-xs-12 p-t">
                                <button id="btnsubmit" name="submit" class="button-regular" data-text="Đăng nhập">Đăng
                                    Nhập
                                </button>
                            </div>
                            <!-- end contact form -->
                        </div>
                        <!-- end contact form container -->
                    </div>
                    <!-- end content -->
                </div>
                <!-- end content container -->
            </div>
            <!-- end form login -->
            <!-- 8.1.4 Coppy right -->
            <div class="footer m-b-0">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!--<div class="navbar-brand size-small"></div>-->
                        <small class="footer-copyright">© 2020 Công Ty TNHH Long DC. <i class="fa fa-phone p-l"></i>
                            1900 1008</small>
                    </div>
                    <ul class="nav navbar-nav navbar-right p-r">
                        <li><a href="https://www.facebook.com/longmolo" class="text-link" target="_blank">Liên hệ</a>
                        </li>
                        <li>
                            <a href="#" class="text-link" alt="" title="Tin tức">Tin tức</a>
                        </li>
                        <li><a href="#" class="text-link">Hướng dẫn sử dụng</a></li>
                        <li><a href="#" class="text-link">Điều kiện &amp; điều khoản</a></li>
                    </ul>
                </div>
            </div>
            <!-- end coppyright -->
        </div>
        <!-- end home section -->

    </div>
</form>
@endsection

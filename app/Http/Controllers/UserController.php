<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();

class UserController extends Controller
{
    public function user_register(Request $request){
        $data = array();
        $data['user_username'] = $request->user_username;
        $data['user_password'] = md5($request->user_password);
        $user_password_confirm = md5($request->user_password_confirm);
        $data['user_name'] = $request->user_name;
        $data['user_image'] = 'avatar_default.png';
        $data['user_status'] ='1';
        if ($user_password_confirm == $data['user_password']){
            $user_id = DB::table('tbl_users')->insertGetId($data);
            Session::put('user_id',$user_id);
            Session::put('user_name',$request->user_name);;
            return Redirect::to('/checkout');
        }else{
            Session::put('message','hai mật khẩu không trùng khớp');
            return Redirect::to('/register');
        }
    }
    public function user_login(Request $request){
        $user_username = $request->user_username;
        $user_password = md5($request->user_password);

        $result = DB::table('tbl_users')->where('user_username',$user_username)->where('user_password',$user_password)->first();
        if ($result){
            Session::put('user_name',$result->user_name);
            Session::put('user_id',$result->user_id);
//            Session::put('user_image',$result->user_image);
            return Redirect::to('/checkout');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu sai');
            return Redirect::to('/login-checkout');
        }
    }
    public function logout_user(){
        Session::put('user_name',null);
        Session::put('user_id',null);
//        Session::put('admin_image',null);
        return Redirect::to('/trang-chu');
    }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){

    }
    public function login_checkout(){
        return view('pages.login_register.user_login');
    }
    public function register_user(){
        return view('pages.login_register.user_register');
    }
    public function checkout(){
        echo Session::get('user_id');
    }

}

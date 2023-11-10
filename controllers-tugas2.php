<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'view/templates/header.php';
require_once 'view/templates/footer.php';

class Admin{
    static function adminDashboard(){
        view('admin/adminDashboard');
    }

    static function adminLogin(){
        view('admin/adminLogin');
    }
}
class Customer{
    static function customerLogin(){
        view('forms/customerLogin');
    }

    static function customerProfile(){
        view('forms/customerProfile');
    }
    static function customerRegister(){
        view('forms/customerRegister');
    }
    
}
class Shop {
    static function cart(){
        view('shop/cart');
    }
    static function contact(){
        view('shop/contact');
    }
    static function home(){
        view('shop/home');
    }
    static function item(){
        view('shop/item');
    }
    static function order(){
        view('shop/order');
    }
}
Class User{
    static function logout(){
        view('user/logout');
    }
}

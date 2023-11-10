<?php
require_once 'controller/controllers.php';
require_once 'controller/functions.php';
require_once 'config/config.php';

$url = $_GET['url'] ?? '/judol.cuy';
switch ($url) {
    case 'dashboard':
        Admin::adminDashboard(); //Class::method()
        break;
    case 'login_form':
        Admin::adminLogin();
        break;
    case 'register':
        Customer::customerRegister();
        break;
    case 'profile':
        Customer::customerProfile();
        break;
    case 'item':
        Shop::item();
        break;
    case 'cart':
        Shop::cart();
        break;
    case 'contact';
        Shop::contact();
        break;
    case 'order';
        Shop::order();
        break;
    case 'home';
        Shop::home();
        break;
    case 'logout';
        User::logout();
        break;
}


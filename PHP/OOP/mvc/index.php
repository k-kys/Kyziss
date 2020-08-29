<?php
session_start();
define('BASE_URL', 'http://mvc.local/');

include './Utils/Loader.php';
include('./Utils/Get.php');
include('./Utils/Post.php');
include('./Utils/Session.php');
include('./Utils/Auth.php');
include './Utils/Pagination.php';
include './Utils/FlashMessage.php';
include './Utils/View.php';
include './Utils/Validator.php';
include './Utils/FormData.php';
include './Utils/Redirect.php';
include './Utils/Url.php';
include './Utils/File.php';

function dd($abc)
{
    echo "<pre>";
    var_dump($abc);
    echo "</pre>";
    die();
}

class Main {
    public static function init()
    {
        $controller = GetRequest::get('controller');
        if (!$controller) {
            $controller = 'Home';
        }

        //confuse: phần vân, bối rối
        $controller .= 'Controller';
        $action = GetRequest::get('action');
        if (!$action) {
            $action = 'index';
        }
        include('./controllers/' . $controller . '.php');
        $objControler = new $controller;
        //Dynamic call function
        $objControler->{$action}();
    }
}

Main::init();



// http://sandbox.local/mvc/?controller=sinhvien&action=danhsach

// echo $controller . "<br>";
// echo $action;
// controller => SINHVIEN
// action => DANHSACH

// controller => SINHVIEN
// action => THEMMOI

// controller => LOPHOC
// action => DANHSACH

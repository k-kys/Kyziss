<?php

class HomeController {

    public function index()
    {
        include './views/home/index.php';
    }

    public function index2()
    {
        dd(Session::all());
    }

}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    public function about(){
        return view('user/about');
    }

    public function course(){
        return view('user/course');
    }
}

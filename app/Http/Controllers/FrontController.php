<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('2020-09-28-practice/index');
    }

    public function contact_us(){
        return view('2020-09-28-practice/contact_us');
    }

    public function news(){
        return view('2020-09-28-practice/news');
    }

    public function news_info(){
        return view('2020-09-28-practice/news_info');
    }

    public function template(){
        return view('2020-09-28-practice/template');
    }

}

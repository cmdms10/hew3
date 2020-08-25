<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return view('main');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function test() {
        return view('test');
    }


}

<?php

namespace App\Http\Controllers;

class Pages extends Controller
{
    public function home() {
        return view('welcome');
    }
    public function about() {
        return view('about');
    }
    public function contact() {
        return view('contact');
    }
}

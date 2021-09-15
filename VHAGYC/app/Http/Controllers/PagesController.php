<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        $title = "VHAGYC";
        return view('welcome', compact('title'));
    }
    public function register() {
        return view('auth.register');
    }
    public function login() {
        return view('auth.login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function login_page(){
        return View("login");
    }

    public function create_account () {
        return view('create_account');
    }

    public function homepage () {
        return view('homepage');
    }



    public function welcome () {
        return view('welcome');
    }
}

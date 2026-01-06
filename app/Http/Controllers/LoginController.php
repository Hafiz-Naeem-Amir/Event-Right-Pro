<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function sitelogin(){
        return view('login');
    }
    public function adminlogin(){
        return view('signin');
    }
    public function register(){
   $countries = json_decode(file_get_contents(public_path('admin/js/countries.json')), true);
return view('register', compact('countries'));

    }
}

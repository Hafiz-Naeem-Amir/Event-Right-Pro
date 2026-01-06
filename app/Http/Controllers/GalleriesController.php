<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index(){
        return view('admin.pages.event_galary.gallery_1');
    }
    public function create(){
        // return view('admin.pages.event_galary.gallery_1');
    }
}

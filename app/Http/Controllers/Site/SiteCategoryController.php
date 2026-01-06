<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteCategoryController extends Controller
{
    public function index(){
       $categories = Category::all();
     return view('site.pages.all-category',compact('categories'));
    }
}

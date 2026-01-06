<?php

namespace App\Http\Controllers\site;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Content;

class SiteBlogController extends Controller
{
    // All blogs
    public function index(){
        $blog = Blog::all(); // sab blogs fetch
        return view('site.pages.siteblogs', compact('blog'));
    }

    // Blog detail
    public function getBlog($id){
        $blogs = Content::findOrFail($id); // agar id na mile toh 404
        return view('site.pages.blog_details', compact('blogs'));
    }
}

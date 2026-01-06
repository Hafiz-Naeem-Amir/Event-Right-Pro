<?php
namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Content;
use App\Models\Category;
use App\Models\Event;
use App\Models\Blog;
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }


}

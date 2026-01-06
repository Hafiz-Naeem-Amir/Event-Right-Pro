<?php

namespace App\Http\Controllers\Site; // Site with capital S

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Content;
use App\Models\Category;
use App\Models\Event;
use App\Models\Blog;
use Illuminate\Support\Str;

class DynamicController extends Controller
{
    // Show dynamic pages based on slug
    public function Pages($slug = '')
    {
        if ($slug === '') {
            $slug = 'home';
        }
        $page = Page::where('slug', $slug)->first();

        $events = '';
        $blog = '';
        $content = '';


        if (!$page) {
            abort(404); // page not found
        }

        $content = Content::where('page_id', $page->id)->first();

        // Determine which view to load
        if ($slug == 'contact-us') {
            $view = 'contact';
        } elseif ($slug == 'events') {
            $events = Event::all();
            $view = 'all-events';
        } elseif ($slug == 'blog') {
            $blog = Blog::all();
            $view = 'siteblogs';
        } elseif ($slug == 'home') {
            $events = Event::all();

            $blog = Blog::all();
            $view = 'index';
        } else {
            abort(404); // unknown slug
        }
        if ($slug !== 'home') {
            return view('site.pages.' . $view, compact('events', 'blog', 'content'));
        } else {
            return view($view, compact('events', 'blog', 'content')); // no quotes around $view
        }
    }



    // Event detail page
    public function eventDetail($id)
    {
        // Event with user
        $eventuser = Event::with('user')->findOrFail($id);

        // Agar images ek hi column me comma-separated hain
        $images = $eventuser->image ? explode(',', $eventuser->image) : [];

        return view('site.pages.event_detail', compact('eventuser', 'images'));
    }



    // Blog detail page
    public function getBlogdetail($id)
    {
        $blogs = Blog::find($id);

        if (!$blogs) {
            abort(404);
        }

        return view('site.pages.blog_details', compact('blogs'));
    }


    // All categories (example)
    public function category()
    {
       $categories = Category::with('events')->get();
        $events = Event::all();
        $blogs = Blog::all();

        return view('index', compact('categories', 'events', 'blogs'));
    }
    // All categories  dropdown(example)
    public function all_category($id = null)
    {
        // تمام categories (tabs کے لیے)
        $categories = Category::all();

        // Agar "all" ya null ho to sab events show karo
        if ($id == null || $id == 'all') {
            $categoryEvents = Event::all();          // All events for main tab
            $onlineEvents = Event::where('type', 'online')->get();
            $online = Event::where('type', 'online')->get();
            $venueEvents = Event::where('type', 'offline')->get();
            $offline = Event::where('type', 'offline')->get();
        } else {
            // Specific category
            $categoryEvents = Event::where('category_id', $id)->get();
            $onlineEvents = Event::where('category_id', $id)
                ->where('type', 'online')
                ->get();
            $venueEvents = Event::where('category_id', $id)
                ->where('type', 'offline')
                ->get();
            $online = Event::where('type', 'online')->get();
            $offline = Event::where('type', 'offline')->get();
        }

        return view('site.pages.category', compact(
            'categories',
            'categoryEvents',
            'onlineEvents',
            'venueEvents',
            'online',
            'offline'
        ));
    }
}

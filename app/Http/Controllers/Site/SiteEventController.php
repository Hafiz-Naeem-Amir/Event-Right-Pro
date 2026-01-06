<?php

namespace App\Http\Controllers\Site;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteEventController extends Controller
{
    public function index()

    {   $events = Event::with('category')->get();
        $onlineEvents = Event::with('category')->where('type', 'online')->get();
        $vanueEvents = Event::with('category')->where('type', 'ofline')->get();
        return view('site.pages.all-events',compact('events','onlineEvents','vanueEvents'));
    }
}

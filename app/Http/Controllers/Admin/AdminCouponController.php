<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCouponController extends Controller
{
    public function index(){
        $coupons = Coupon::all();
        return view('admin.pages.coupon',compact('coupons'));
    }

    public function create(){
        $events = Event::all();
        return view('admin.pages.add_coupon', compact('events'));
    }
}

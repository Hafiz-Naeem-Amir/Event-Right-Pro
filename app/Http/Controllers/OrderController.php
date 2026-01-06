<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
 use App\Models\Ticket;

class OrderController extends Controller
{
     public function index(){
       return view('admin.pages.orders');
    }


public function create()
{
    $users = User::all();
    $tickets = Ticket::all();
    return view('admin.pages.orders_create', compact('users', 'tickets'));
}
public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'ticket_id' => 'required|exists:tickets,id',
        'quantity' => 'required|integer|min:1',
    ]);

    Order::create([
        'email' => $request->email,
        'ticket_id' => $request->ticket_id,
        'quantity' => $request->quantity,
        'user_id' => null, // agar user_id available ho to set karen
    ]);

    return response()->json(['success' => true]);
}
}

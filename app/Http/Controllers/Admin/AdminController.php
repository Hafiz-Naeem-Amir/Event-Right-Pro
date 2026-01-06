<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\WalletTransaction;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }

    public function event() {
        return view('admin.pages.event');
    }

    public function blog() {
        return view('admin.pages.blog');
    }

    public function income() {
        return view('admin.pages.income');
    }

    public function review() {
        return view('admin.pages.review');
    }

    public function notification() {
        return view('admin.pages.notification');
    }

    public function wallet() {
        $transactions = WalletTransaction::with('user')->orderBy('payment_datetime', 'desc')->get();
        return view('admin.pages.wallet_transactions', compact('transactions'));
    }
}

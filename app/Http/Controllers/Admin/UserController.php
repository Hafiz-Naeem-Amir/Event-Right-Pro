<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

public function store(Request $request)
{
    $request->validate([
        'user_type' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ]);

    User::create([
        'user_type' => $request->user_type,
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'organization_name' => $request->organization_name,
        'password' => Hash::make($request->password),
        'status' => 1,
        'verified' => $request->user_type === 'organizer' ? 0 : 1,
    ]);

    return redirect()->route('login')->with('success', 'Account created');
}

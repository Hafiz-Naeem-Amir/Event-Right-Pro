<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();


        return view('admin.pages.user', compact('users'));
    }
    public function register()
    {
        $countries = json_decode(
            file_get_contents(public_path('admin/js/countries.json')),
            true
        );

        return view('auth.register', compact('countries'));
    }
    public function create()
    {
        $users = User::all();
        return view('admin.pages.add_user', compact('users'));
    }

   public function store(Request $request)
{
    $isAdminDashboard = $request->boolean('admin_dashboard');

    // Validation
    $rules = [
        'first_name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'], // صرف English alphabets
        'last_name'  => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/'], // صرف English alphabets
        'email'      => 'required|email|unique:users,email',
        'password'   => 'required|string|min:6|confirmed',
        'user_type'  => 'required|array',
        'user_type.*'=> 'required|string|in:admin,user,organizer',
    ];

    if ($isAdminDashboard) {
        $rules = array_merge($rules, [
            'image'             => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone'             => ['required','string','max:20','regex:/^[0-9]+$/'], // صرف numbers
            'status'            => 'required|in:0,1',
            'roles'             => 'nullable|array',
            'roles.*'           => 'string|exists:roles,name',
            'organization_name' => 'required|string|max:255',
        ]);
    } else {
        $rules = array_merge($rules, [
            'image'             => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone'             => ['nullable','string','max:20','regex:/^[0-9]+$/'], // صرف numbers
            'organization_name' => 'nullable|string|max:255',
        ]);
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        if ($request->expectsJson() || $isAdminDashboard) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Image upload
    $imageName = null;
    if ($request->hasFile('image')) {
        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/user/images'), $imageName);
    }

    // Convert multiple user_types into comma separated string for DB
    $userType = implode(',', $request->user_type);

    // Create User
    $user = User::create([
        'first_name'        => $request->first_name,
        'last_name'         => $request->last_name,
        'email'             => $request->email,
        'password'          => $request->password, // Mutator will hash
        'phone'             => $request->phone,
        'user_type'         => $userType,
        'status'            => $request->status ?? 1,
        'image'             => $imageName,
        'organization_name' => in_array('organizer', $request->user_type) ? $request->organization_name : null,
    ]);

    // Sync roles if provided
    if ($request->filled('roles')) {
        $user->syncRoles($request->roles);
    }

    if (!$isAdminDashboard) {
        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('dashboard')->with('success', 'Account created successfully!');
    }

    return response()->json(['success' => true, 'message' => 'User created successfully']);
}



public function edit($id)
{
    $user = User::findOrFail($id);

    // DB میں سے تمام roles fetch
    $allRoles = ['admin', 'user', 'organizer']; // یا Role::all() اگر spatie use ہو رہا ہو

    return response()->json([
        'id' => $user->id,
        'first_name' => $user->first_name,
        'last_name' => $user->last_name,
        'email' => $user->email,
        'phone' => $user->phone,
        'status' => $user->status,
        'organization_name' => $user->organization_name,
        'user_type' => $user->user_type, // comma separated
        'image' => $user->image,
        'allRoles' => $allRoles
    ]);
}




   // Admin/UserController.php
public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    // Validation
    $rules = [
        'first_name' => ['required','string','max:255','regex:/^[a-zA-Z]+$/'],
        'last_name'  => ['required','string','max:255','regex:/^[a-zA-Z]+$/'],
        'email'      => 'required|email|unique:users,email,' . $user->id,
        'phone'      => ['nullable','string','max:20','regex:/^[0-9]+$/'],
        'status'     => 'required|in:0,1',
        'user_type'  => 'required|array',
        'user_type.*'=> 'string|in:admin,user,organizer',
        'organization_name' => 'nullable|string|max:255',
        'image'      => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors'  => $validator->errors()
        ], 422);
    }

    // Handle image upload
    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($user->image && file_exists(public_path('uploads/user/images/' . $user->image))) {
            unlink(public_path('uploads/user/images/' . $user->image));
        }
        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads/user/images'), $imageName);
        $user->image = $imageName;
    }

    // Update other fields
    $user->first_name        = $request->first_name;
    $user->last_name         = $request->last_name;
    $user->email             = $request->email;
    $user->phone             = $request->phone;
    $user->status            = $request->status;
    $user->organization_name = in_array('organizer', $request->user_type) ? $request->organization_name : null;

    // Store user_type as comma-separated string
    $user->user_type = implode(',', $request->user_type);

    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'User updated successfully'
    ]);
}


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Delete image if exists
        if ($user->image && file_exists(public_path('uploads/user/images/' . $user->image))) {
            unlink(public_path('uploads/user/images/' . $user->image));
        }

        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully',
        ]);
    }
}

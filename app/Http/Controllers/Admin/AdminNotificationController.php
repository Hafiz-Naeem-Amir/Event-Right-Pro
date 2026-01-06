<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function index()
    {
        return view('admin.pages.notification');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => ['required', 'string', 'regex:/^[a-zA-Z\s]+$/'],
            'user_ids' => 'required|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only(['title', 'description', 'user_ids']);

        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/notifications'), $imageName);
            $data['image'] = $imageName;
        }

        Notification::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Notification sent successfully'
        ]);
    }
}

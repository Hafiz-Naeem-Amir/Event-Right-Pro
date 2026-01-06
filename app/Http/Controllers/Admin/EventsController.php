<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Event;
use App\Models\Scanner;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('admin.pages.event', compact('events'));
    }

    public function create()
    {
        $event = Event::all();
        $cate = Category::all();
        $users =  User::all();
       // $scan = Scanner::all(); // To populate select
        return view('admin.pages.add_event', compact( 'cate', 'users', 'event'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[A-Za-z\s]+$/|max:255',
            'user_id'     => 'required|exists:users,id',
            'image'       => 'nullable|image',

            // Date validation (AM/PM allowed)
            'start_time' => 'required|date_format:Y-m-d h:i A',
            'end_time'   => 'required|date_format:Y-m-d h:i A',
            'people'      => 'required|integer|min:1',
            'status'      => 'required|in:0,1',
            'description' => 'required|string',
            'address'     => 'required|string',
            'tags'     => 'required|string',
            'category_id' => 'nullable|exists:categories,id',

            'lat' => 'required|nullable|string',
            'lang' => 'required|nullable|string',
            'url' => 'nullable|url',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Handle image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $imageName);
        }

        $event = Event::create([
            'name'        => $request->name,

            'user_id'     => $request->user_id,
            'image'       => $imageName,
            'start_time'  => \Carbon\Carbon::parse($request->start_time)->format('Y-m-d H:i:s'),
            'end_time'    => \Carbon\Carbon::parse($request->end_time)->format('Y-m-d H:i:s'),
            'people'      => $request->people,
            'status'      => $request->status,
            'description' => $request->description,
            'address'     => $request->address,
            'tags'        => $request->tags,
            'category_id' => $request->category_id,
            'lat'         => $request->type == 'offline' ? $request->lat : null,
            'lang'        => $request->type == 'offline' ? $request->lang : null,
            'url'         => $request->type == 'online' ? $request->url : null,
        ]);



        return response()->json([
            'status' => 'success',
            'message' => 'Event created successfully!'
        ]);
    }
    // EventController.php
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $users = User::all();
        $scan = Scanner::all();
        $cate = Category::all();

        return view('admin.pages.edit_events', compact('event', 'users', 'scan', 'cate'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[A-Za-z\s]+$/|max:255',

            'user_id' => 'required|exists:users,id',

            'image' => 'nullable|image',
            'start_time' => 'required|date_format:Y-m-d h:i A',
            'end_time' => 'required|date_format:Y-m-d h:i A',
            'people' => 'required|integer|min:1',
            'status' => 'required|in:0,1',
            'description' => 'required|string',
            'address' => 'required|string',
            'tags' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
            'lat' => 'required|nullable|string',
            'lang' => 'required|nullable|string',
            'url' => 'nullable|string',
            'type' => 'required|in:offline,online',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $imageName = $event->image; // old image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/events'), $imageName);
        }

        $event->update([
            'name' => $request->name,

            'user_id' => $request->user_id,


            'image' => $imageName,
            'start_time' => \Carbon\Carbon::parse($request->start_time)->format('Y-m-d H:i:s'),
            'end_time' => \Carbon\Carbon::parse($request->end_time)->format('Y-m-d H:i:s'),
            'people' => $request->people,
            'status' => $request->status,
            'description' => $request->description,
            'address' => $request->address,
            'tags' => $request->tags,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'lat' => $request->type == 'offline' ? $request->lat : null,
            'lang' => $request->type == 'offline' ? $request->lang : null,
            'url' => $request->type == 'online' ? $request->url : null,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Event updated successfully!'
        ]);
    }

    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'status' => 'error',
                'message' => 'Event not found!'
            ], 404);
        }

        // Delete image if exists
        if ($event->image && file_exists(public_path('uploads/events/' . $event->image))) {
            unlink(public_path('uploads/events/' . $event->image));
        }

        $event->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Event deleted successfully!'
        ]);
    }


    public function details()
    {
        return  view('admin.pages.events_details.1');
    }
public function show($id)
{
    $event = Event::findOrFail($id);
    return view('admin.pages.event_galary.gallery_1', compact('event'));
}

public function deleteImage($id, $image)
{
    $event = Event::findOrFail($id);

    // Decode images array safely
    $images = json_decode($event->image, true);
    if (!is_array($images)) {
        $images = []; // اگر null یا invalid ہو تو empty array بنا دیں
    }

    // Remove the image from array
    if (($key = array_search($image, $images)) !== false) {
        unset($images[$key]);
    }

    // Save updated images back to DB
    $event->image = json_encode(array_values($images));
    $event->save();

    // Delete file from server
    $imagePath = public_path('uploads/events/' . $image);
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    return redirect()->back()->with('success', 'Image deleted successfully.');
}

public function addGalleryImages(Request $request)
{
    $request->validate([
        'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'id' => 'required|exists:events,id'
    ]);

    $event = Event::findOrFail($request->id);

    // Decode existing images
    $images = json_decode($event->image, true);
    if (!is_array($images)) {
        $images = [];
    }

    if ($request->hasfile('image')) {
        foreach ($request->file('image') as $file) {
            $name = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/events/'), $name);
            $images[] = $name;
        }
    }

    // Save images to DB
    $event->image = json_encode($images);
    $event->save();

    return response()->json(['success'=>'Images uploaded successfully.']);
}


}

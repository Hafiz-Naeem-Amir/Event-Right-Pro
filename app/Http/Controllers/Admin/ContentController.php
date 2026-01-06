<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Content;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class ContentController extends Controller
{
    // ------------------------------
    // DISPLAY ALL CONTENT
    // ------------------------------
    public function index()
    {
        $contents = Content::all();
        return view('admin.pages.content', compact('contents'));
    }

    // ------------------------------
    // SHOW CREATE FORM
    // ------------------------------
    public function create()
    {
        $pages = Page::all();
        $categories = Category::all();
        return view('admin.pages.add_content', compact('pages', 'categories'));
    }

    // ------------------------------
    // STORE CONTENT (AJAX)
    // ------------------------------
    public function store(Request $request)
    {
        // ------------------------------
        // Validation
        // ------------------------------
        $request->validate([
            'title'        => ['required', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'h1'           => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'h2'           => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'p'            => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'keyword'      => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
'description' => ['nullable', 'string', 'regex:/^[A-Za-z\s,.\'’&\-]+$/'],
            'content'      => ['required', 'string', 'regex:/^[A-Za-z\s,.\'’]+$/'],
            'page_id'      => 'required|exists:pages,id',
            'category_id'  => 'nullable|exists:categories,id',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tags'         => 'nullable|array',
        ]);


        // ------------------------------
        // Prepare Data
        // ------------------------------
        $data = $request->except(['image', 'tags']);

        // ------------------------------
        // Image Upload
        // ------------------------------
        if ($request->hasFile('image')) {
            if (!file_exists(public_path('uploads/content'))) {
                mkdir(public_path('uploads/content'), 0777, true);
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/content'), $imageName);
            $data['image'] = $imageName;
        }

        // ------------------------------
        // Tags Array → JSON
        // ------------------------------
        if ($request->has('tags') && is_array($request->tags)) {
            $data['tags'] = json_encode($request->tags);
        }

        // ------------------------------
        // Create Content
        // ------------------------------
        $content = Content::create($data);

        // ------------------------------
        // Return JSON Response
        // ------------------------------
        return response()->json([
            'status'  => true,
            'message' => 'Content Created Successfully',
            'content_id' => $content->id
        ]);
    }


    // ------------------------------
    // EDIT CONTENT
    // ------------------------------
    public function edit($id)
    {
        $content = Content::findOrFail($id);
        $pages = Page::all();
        $categories = Category::all();
        return view('admin.pages.edit_content', compact('content', 'pages', 'categories'));
    }

    // ------------------------------
    // UPDATE CONTENT (AJAX)
    // ------------------------------
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'        => ['required', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'h1'           => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'h2'           => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'p'            => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
            'keyword'      => ['nullable', 'string', 'max:255', 'regex:/^[A-Za-z\s]+$/'],
'description' => ['nullable', 'string', 'regex:/^[A-Za-z\s,.\'’&\-]+$/'],
            'content'      => ['required', 'string', 'regex:/^[A-Za-z\s,.\'’]+$/'],

            'page_id'      => 'required|exists:pages,id',
            'category_id'  => 'nullable|exists:categories,id',
            'image'        => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tags'         => 'nullable|array',
        ]);

        $content = Content::findOrFail($id);
        $data = $request->except(['image', 'tags']);

        // Image Update
        if ($request->hasFile('image')) {
            if (!file_exists(public_path('uploads/content'))) {
                mkdir(public_path('uploads/content'), 0777, true);
            }
            if ($content->image && file_exists(public_path('uploads/content/' . $content->image))) {
                unlink(public_path('uploads/content/' . $content->image));
            }
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/content'), $imageName);
            $data['image'] = $imageName;
        }

        // Tags
        if ($request->has('tags')) {
            $data['tags'] = json_encode($request->tags);
        }

        $content->update($data);

        return response()->json([
            'status' => true,
            'message' => 'Content Updated Successfully'
        ]);
    }

    // ------------------------------
    // DELETE CONTENT (AJAX)
    // ------------------------------
    public function destroy($id)
    {
        $content = Content::findOrFail($id);

        if ($content->image && file_exists(public_path('uploads/content/' . $content->image))) {
            unlink(public_path('uploads/content/' . $content->image));
        }

        $content->delete();

        return response()->json([
            'status' => true,
            'message' => 'Content Deleted Successfully'
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    // Show all pages
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.pages', compact('pages'));
    }

    // Show add page form
    public function create()
    {
        return view('admin.pages.add_page');
    }

    // Store a new page
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255', 'unique:pages,title'],
            'slug' => ['required', 'regex:/^[a-z0-9-]+$/', 'max:255', 'unique:pages,slug'],
            'description' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }

        $data = $validator->validated();
        $data['title'] = trim($data['title']);
        $data['slug'] = trim($data['slug']);
        $data['description'] = trim($data['description']);

        Page::create($data);

        return response()->json([
            'status' => 200,
            'message' => 'Page added successfully!',
        ]);
    }

    // Show edit page form
    public function edit($id)
    {
        $page = Page::findOrFail($id);
        return view('admin.pages.edit_page', compact('page'));
    }

    // Update an existing page
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255', 'unique:pages,title,' . $id],
            'slug' => ['required', 'regex:/^[a-z0-9-]+$/', 'max:255', 'unique:pages,slug,' . $id],
            'description' => ['required', 'string']
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ]);
        }

        $page = Page::findOrFail($id);

        $page->update([
            'title' => trim($request->title),
            'slug' => trim($request->slug),
            'description' => trim($request->description),
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Page updated successfully!',
        ]);
    }

    // Delete a page
    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Page deleted successfully!',
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class CategoryController extends Controller
{


     public function index()
    {
       $categories = Category::withCount('events')->get();
        return view('admin.pages.category', compact('categories'));
    }
    public function create()
    {
        return view('admin.pages.add_category'); // your blade file
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required',
            'image' => 'required|nullable|image',

        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $imageName);
        }

        $category = Category::create([
            'name' => $request->name,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return response()->json([
            'message' => 'Category added successfully!',
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        return response()->json(Category::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required',
            'image' => 'required|nullable|image',

        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/category/'), $imageName);

            if ($category->image && file_exists(public_path('uploads/category/' . $category->image))) {
                unlink(public_path('uploads/category/' . $category->image));
            }

            $category->image = $imageName;
        }

        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();

        return response()->json(['message' => 'Category updated successfully!']);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        if ($category->image && file_exists(public_path('uploads/category/' . $category->image))) {
            unlink(public_path('uploads/category/' . $category->image));
        }

        $category->delete();

        return response()->json(['message' => 'Category deleted successfully!']);
    }
}

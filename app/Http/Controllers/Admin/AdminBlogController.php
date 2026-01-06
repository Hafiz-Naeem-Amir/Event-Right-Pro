<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blog', compact('blogs'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.add_blog',compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'description' => 'required|string',
            'tags' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error','errors'=>$validator->errors()],422);
        }

        $imageName = null;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $imageName = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $imageName);
        }

        Blog::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'tags' => $request->tags,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return response()->json(['status'=>'success','message'=>'Blog created successfully!']);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
       return view('admin.pages.edit_blog',compact('blog','categories'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'description' => 'required|string',
            'tags' => 'nullable|string',
            'status' => 'required|in:0,1',
        ]);

        if ($validator->fails()) {
            return response()->json(['status'=>'error','errors'=>$validator->errors()],422);
        }

        $imageName = $blog->image;
        if($request->hasFile('image')){
            if($blog->image && file_exists(public_path('uploads/blogs/'.$blog->image))){
                unlink(public_path('uploads/blogs/'.$blog->image));
            }
            $file = $request->file('image');
            $imageName = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/blogs'), $imageName);
        }

        $blog->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'tags' => $request->tags,
            'status' => $request->status,
            'image' => $imageName,
        ]);

        return response()->json(['status'=>'success','message'=>'Blog updated successfully!']);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        if(!$blog){
            return response()->json(['status'=>'error','message'=>'Blog not found!'],404);
        }

        if($blog->image && file_exists(public_path('uploads/blogs/'.$blog->image))){
            unlink(public_path('uploads/blogs/'.$blog->image));
        }

        $blog->delete();

        return response()->json(['status'=>'success','message'=>'Blog deleted successfully!']);
    }
}



<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogAdminController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('landing.admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('landing.admin.blog.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => 'required',
            "date" => 'required',
            "deskripsi" => 'required'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image')->store('blog', 'public');
        }

        $slug = Str::slug($request->title);
        Blog::create([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'deskripsi' => $request->input('deskripsi'),
            'image' => $file
        ]);

        return redirect()->route('index_blog');
    }

    public function edit(Request $request, $id)
    {
        $edit = Blog::where('id', $id)->first();
        return view('landing.admin.blog.update', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Blog::where('id', $id)->first();
        if ($request->file('image')) {
            $file = $request->file('image')->store('blog', 'public');
            if ($update->image && file_exists(storage_path('app/public/' . $update->image))) {
                Storage::delete('public/' . $update->image);
                $file = $request->file('image')->store('blog', 'public');
            }
        }

        if ($request->file('image') === null) {
            $file = $update->image;
        }

        $slug = Str::slug($request->title);
        $update->update([
            'title' => $request->input('title'),
            'date' => $request->input('date'),
            'slug' => $slug,
            'deskripsi' => $request->input('deskripsi'),
            'image' => $file
        ]);

        return redirect()->route('index_blog');
    }

    public function destroy($id)
    {
        $delete = Blog::where('id', $id)->first();
        if ($delete->image && file_exists(storage_path('app/public/' . $delete->image))) {
            Storage::delete('public/' . $delete->image);
        }

        $delete->delete();

        return redirect()->route('index_blog');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GalleryPhotosController extends Controller
{
    public function gallery_photos_index()
    {
        $photo = Photos::all();
        return view('landing.admin.gallery-photo.index', compact('photo'));
    }

    public function gallery_photos_create()
    {
        return view('landing.admin.gallery-photo.create');
    }

    public function gallery_photos_store(Request $request)
    {
        $this->validate($request, [
            'title',
            'image',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image')->store('gallery-photos', 'public');
        }

        Photos::create([
            "title" => $request->input('title'),
            "image" => $file,
        ]);

        return redirect()->route('index_photos');
    }

    public function gallery_photos_edit(Request $request, $id)
    {
        $edit = Photos::where('id', $id)->first();
        return view('landing.admin.gallery-photo.update', compact('edit'));
    }

    public function gallery_photos_update(Request $request, $id)
    {
        $update = Photos::where('id', $id)->first();
        if ($request->file('image')) {
            $file = $request->file('image')->store('gallery-photos', 'public');
            if ($update->image && file_exists(storage_path('app/public/' . $update->image))) {
                Storage::delete('public/' . $update->image);
                $file = $request->file('image')->store('gallery-photos', 'public');
            }
        }

        if ($request->file('image') === null) {
            $file = $update->image;
        }

        $update->update([
            "title" => $request->input('title'),
            "image" => $file,
        ]);

        return redirect()->route('index_photos');
    }

    public function gallery_photos_destroy($id)
    {
        $delete = Photos::where('id', $id)->first();
        if ($delete->image && file_exists(storage_path('app/public/' . $delete->image))) {
            Storage::delete('public/' . $delete->image);
        }

        $delete->delete();

        return redirect()->route('index_photos');
    }
}

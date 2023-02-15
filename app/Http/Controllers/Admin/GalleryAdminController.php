<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photos;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryAdminController extends Controller
{
    public function gallery_photos_index()
    {
        $photo = Photos::all();
        return view('landing.admin.gallery-photo.index', compact('photo'));
    }

    public function gallery_video_index()
    {
        $videos = Video::all();
        return view('landing.admin.gallery-video.index', compact('videos'));
    }

    public function gallery_photos_create()
    {
        return view('landing.admin.gallery-photo.create');
    }

    public function gallery_video_create()
    {
        return view('landing.admin.gallery-video.create');
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

    public function gallery_video_store(Request $request)
    {
        $this->validate($request, [
            'video',
        ]);

        if ($request->file('video')) {
            $file = $request->file('video')->store('gallery-video', 'public');
        }

        Video::create([
            "video" => $file,
        ]);

        return redirect()->route('index_video');
    }

    public function gallery_photos_edit(Request $request, $id)
    {
        $edit = Photos::where('id', $id)->first();
        return view('landing.admin.gallery-photo.update', compact('edit'));
    }

    public function gallery_video_edit(Request $request, $id)
    {
        $edit = Video::where('id', $id)->first();
        return view('landing.admin.gallery-video.update', compact('edit'));
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

    public function gallery_video_update(Request $request, $id)
    {
        $update = Video::where('id', $id)->first();
        if ($request->file('video')) {
            $file = $request->file('video')->store('gallery-video', 'public');
            if ($update->video && file_exists(storage_path('app/public/' . $update->video))) {
                Storage::delete('public/' . $update->video);
                $file = $request->file('video')->store('gallery-video', 'public');
            }
        }

        if ($request->file('video') === null) {
            $file = $update->video;
        }

        $update->update([
            "video" => $file,
        ]);

        return redirect()->route('index_video');
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

    public function gallery_video_destroy($id)
    {
        $delete = Video::where('id', $id)->first();
        if ($delete->video && file_exists(storage_path('app/public/' . $delete->video))) {
            Storage::delete('public/' . $delete->video);
        }

        $delete->delete();

        return redirect()->route('index_video');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class EventsController extends Controller
{
    public function index_event()
    {
        $event = Event::all();
        return view('landing.admin.events.index', compact('event'));
    }

    public function create_event()
    {
        return view('landing.admin.events.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title',
            'image',
            'deskripsi'
        ]);

        if ($request->file('image')) {
            $file = $request->file('image')->store('event', 'public');
        }

        $slug = Str::slug($request->title);
        Event::create([
            "title" => $request->input('title'),
            "slug" => $slug,
            "image" => $file,
            "deskripsi" => $request->input('deskripsi')
        ]);

        return redirect()->route('index_events');
    }

    public function edit(Request $request, $id)
    {
        $edit = Event::where('id', $id)->first();
        return view('landing.admin.events.update', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Event::where('id', $id)->first();

        if ($request->file('image')) {
            $file = $request->file('image')->store('event', 'public');
            if ($update->image && file_exists(storage_path('app/public/' . $update->image))) {
                Storage::delete('public/' . $update->image);
                $file = $request->file('image')->store('event', 'public');
            }
        }

        if ($request->file('image') === null) {
            $file = $update->image;
        }

        $slug = Str::slug($request->title);
        $update->update([
            "title" => $request->input('title'),
            "slug" => $slug,
            "image" => $file,
            "deskripsi" => $request->input('deskripsi')
        ]);

        return redirect()->route('index_events');
    }

    public function destroy($id)
    {
        $delete = Event::where('id', $id)->first();
        if ($delete->image && file_exists(storage_path('app/public/' . $delete->image))) {
            Storage::delete('public/' . $delete->image);
        }
        $delete->delete();

        return redirect()->route('index_events');
    }
}
